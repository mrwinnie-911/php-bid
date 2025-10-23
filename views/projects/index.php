<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Projects</h2>
        <p class="text-muted mb-0">Overview of active work within your department.</p>
    </div>
    <div class="btn-group">
        <button class="btn btn-primary">New Project</button>
        <button class="btn btn-outline-primary">Upload PDF</button>
    </div>
</div>
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3 align-items-end mb-3">
            <div class="col-12 col-md-3">
                <label class="form-label">Search</label>
                <input type="text" class="form-control" placeholder="Search by client or project">
            </div>
            <div class="col-6 col-md-2">
                <label class="form-label">Department</label>
                <select class="form-select">
                    <option>All</option>
                    <?php foreach ($departments as $code => $name): ?>
                        <option><?= htmlspecialchars($name) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-6 col-md-2">
                <label class="form-label">Status</label>
                <select class="form-select">
                    <option>Any</option>
                    <option>Drafting</option>
                    <option>In Design</option>
                    <option>Awaiting Approval</option>
                    <option>Proposal Delivered</option>
                </select>
            </div>
            <div class="col-12 col-md-3 text-md-end">
                <label class="form-label">Date Range</label>
                <input type="text" class="form-control" value="Last 90 days">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                <tr>
                    <th scope="col">Project</th>
                    <th scope="col">Client</th>
                    <th scope="col">Department</th>
                    <th scope="col">Status</th>
                    <th scope="col">Updated</th>
                    <th scope="col" class="text-end">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($projects as $project): ?>
                    <tr>
                        <td>
                            <strong><?= htmlspecialchars($project['name']) ?></strong>
                            <div class="text-muted small">ID: <?= htmlspecialchars($project['id']) ?></div>
                        </td>
                        <td><?= htmlspecialchars($project['client']) ?></td>
                        <td><span class="badge bg-secondary"><?= htmlspecialchars($project['department']) ?></span></td>
                        <td><?= htmlspecialchars($project['status']) ?></td>
                        <td><?= htmlspecialchars($project['updated_at']) ?></td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-secondary">Open</button>
                                <button class="btn btn-outline-secondary">Quotes</button>
                                <button class="btn btn-outline-secondary">History</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
