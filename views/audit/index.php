<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <h2 class="h5 mb-0">Audit Log</h2>
            <p class="text-muted small mb-0">Tracks quote edits, version changes, and status updates.</p>
        </div>
        <button class="btn btn-sm btn-outline-primary">Export CSV</button>
    </div>
    <div class="card-body">
        <div class="row g-3 mb-3">
            <div class="col-12 col-md-3">
                <label class="form-label">Quote ID</label>
                <input type="text" class="form-control" placeholder="Q-2201">
            </div>
            <div class="col-6 col-md-3">
                <label class="form-label">Event Type</label>
                <select class="form-select">
                    <option>Any</option>
                    <option>Quote Edit</option>
                    <option>Version Change</option>
                    <option>Status Change</option>
                </select>
            </div>
            <div class="col-6 col-md-3">
                <label class="form-label">User</label>
                <input type="text" class="form-control" placeholder="C. Ramirez">
            </div>
            <div class="col-12 col-md-3">
                <label class="form-label">Date Range</label>
                <input type="text" class="form-control" value="Last 90 days">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-light">
                <tr>
                    <th scope="col">Quote</th>
                    <th scope="col">Event</th>
                    <th scope="col">User</th>
                    <th scope="col">Timestamp</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($audit_events as $event): ?>
                    <tr>
                        <td><?= htmlspecialchars($event['quote']) ?></td>
                        <td><?= htmlspecialchars($event['event']) ?></td>
                        <td><?= htmlspecialchars($event['user']) ?></td>
                        <td><?= htmlspecialchars($event['time']) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
