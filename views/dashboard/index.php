<div class="row g-3">
    <div class="col-12 col-xl-8">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Department Metrics (90 days)</h5>
                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#metricBuilderModal">Create Metric</button>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <?php foreach ($metrics as $metric): ?>
                        <div class="col-12 col-md-4">
                            <div class="metric-card p-3 border rounded">
                                <p class="text-muted text-uppercase small mb-1"><?= htmlspecialchars($metric['title']) ?></p>
                                <h4 class="fw-bold mb-0"><?= htmlspecialchars($metric['value']) ?></h4>
                                <p class="text-success small mb-2"><?= htmlspecialchars($metric['change']) ?> vs prior period</p>
                                <p class="small text-muted mb-0"><?= htmlspecialchars($metric['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                <h5 class="mb-0">Recent Notifications</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <?php foreach ($notifications as $notification): ?>
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <strong><?= htmlspecialchars($notification['title']) ?></strong>
                                <span class="badge bg-secondary"><?= htmlspecialchars($notification['department']) ?></span>
                            </div>
                            <p class="mb-1 small text-muted"><?= htmlspecialchars($notification['message']) ?></p>
                            <span class="text-muted small"><?= htmlspecialchars($notification['time']) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="metricBuilderModal" tabindex="-1" aria-labelledby="metricBuilderLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="metricBuilderLabel">Metric Builder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Metric Templates</label>
                        <div class="list-group small">
                            <?php foreach ($metric_templates as $template): ?>
                                <button type="button" class="list-group-item list-group-item-action">
                                    <strong><?= htmlspecialchars($template['name']) ?></strong>
                                    <span class="d-block text-muted">Category: <?= htmlspecialchars($template['category']) ?></span>
                                    <span class="d-block text-muted"><?= htmlspecialchars($template['definition']) ?></span>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Metric Configuration</label>
                        <div class="border rounded p-3 bg-light">
                            <div class="mb-3">
                                <label class="form-label">Data Set</label>
                                <select class="form-select">
                                    <option>Quotes</option>
                                    <option>Projects</option>
                                    <option>Imports</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Aggregation</label>
                                <select class="form-select">
                                    <option>Sum</option>
                                    <option>Average</option>
                                    <option>Count</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Visualization</label>
                                <select class="form-select">
                                    <option>KPI Tile</option>
                                    <option>Bar Chart</option>
                                    <option>Line Chart</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Filters</label>
                                <input type="text" class="form-control" placeholder="Department = AV; Status = In Review">
                            </div>
                            <button class="btn btn-primary w-100">Save Metric</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
