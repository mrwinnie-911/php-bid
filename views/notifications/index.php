<div class="row g-3">
    <div class="col-12 col-xl-4">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                <h5 class="mb-0">Notification Filters</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <select class="form-select">
                        <?php foreach ($departments as $code => $name): ?>
                            <option><?= htmlspecialchars($name) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Event Types</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="eventQuotes" checked>
                        <label class="form-check-label" for="eventQuotes">Quote Updates</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="eventApprovals" checked>
                        <label class="form-check-label" for="eventApprovals">Approvals</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="eventRFIs">
                        <label class="form-check-label" for="eventRFIs">RFI Responses</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Delivery</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="deliveryInApp" checked>
                        <label class="form-check-label" for="deliveryInApp">In-app</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="deliveryTeams" disabled>
                        <label class="form-check-label" for="deliveryTeams">Teams (coming soon)</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-8">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Department Notifications</h5>
                <button class="btn btn-sm btn-outline-primary">Mark all as read</button>
            </div>
            <div class="list-group list-group-flush">
                <?php foreach ($notifications as $notification): ?>
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong><?= htmlspecialchars($notification['title']) ?></strong>
                                <p class="mb-0 small text-muted"><?= htmlspecialchars($notification['message']) ?></p>
                            </div>
                            <span class="badge bg-secondary"><?= htmlspecialchars($notification['department']) ?></span>
                        </div>
                        <div class="small text-muted mt-1"><?= htmlspecialchars($notification['time']) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
