<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Quotes</h2>
        <p class="text-muted mb-0">Manage in-progress and approved quotes with version control.</p>
    </div>
    <div class="btn-group">
        <button class="btn btn-primary">New Quote</button>
        <button class="btn btn-outline-primary">Generate PDF</button>
    </div>
</div>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                        <tr>
                            <th scope="col">Quote</th>
                            <th scope="col">Project</th>
                            <th scope="col">Version</th>
                            <th scope="col">Status</th>
                            <th scope="col">Value</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($quotes as $quote): ?>
                            <tr>
                                <td><?= htmlspecialchars($quote['id']) ?></td>
                                <td><?= htmlspecialchars($quote['project_id']) ?></td>
                                <td><?= htmlspecialchars($quote['version']) ?></td>
                                <td><span class="badge bg-info text-dark"><?= htmlspecialchars($quote['status']) ?></span></td>
                                <td><?= format_currency($quote['value']) ?></td>
                                <td><?= htmlspecialchars($quote['owner']) ?></td>
                                <td><?= htmlspecialchars($quote['updated_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                <h5 class="mb-0">Version History Preview</h5>
            </div>
            <div class="card-body">
                <p class="text-muted small">Select a quote to compare versions. Prototype displays summary of most recent changes.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Q-2201 v3</strong>
                        <div class="small text-muted">Labor adjusted for AV technicians (+6 hrs)</div>
                    </li>
                    <li class="list-group-item">
                        <strong>Q-2207 v2</strong>
                        <div class="small text-muted">Added client-requested security monitoring package.</div>
                    </li>
                    <li class="list-group-item">
                        <strong>Q-2205 v1</strong>
                        <div class="small text-muted">Imported from Global AV Supply vendor sheet.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
