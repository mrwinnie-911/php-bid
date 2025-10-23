<div class="row g-3">
    <div class="col-12 col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                <h5 class="mb-0">Role & Department Settings</h5>
            </div>
            <div class="card-body">
                <p class="text-muted small">Prototype forms capture editable configuration fields, fulfilling the requirement for in-app management.</p>
                <div class="mb-3">
                    <label class="form-label">Select Role</label>
                    <select class="form-select">
                        <option>Estimator</option>
                        <option>Sales Rep</option>
                        <option>Department Manager</option>
                        <option>Administrator</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Department Access</label>
                    <select class="form-select" multiple>
                        <?php foreach ($departments as $code => $name): ?>
                            <option selected><?= htmlspecialchars($name) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Default Dashboard Metrics</label>
                    <input type="text" class="form-control" placeholder="Win Rate; Pending Approvals; Revenue Forecast">
                </div>
                <button class="btn btn-primary">Save Role Configuration</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card shadow-sm mb-3">
            <div class="card-header">
                <h5 class="mb-0">Feature Toggles</h5>
            </div>
            <div class="card-body">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="toggleAzure" <?= $config['feature_flags']['azure_ad'] ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="toggleAzure">Azure AD Integration (framework ready)</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="toggleClientPortal" <?= $config['feature_flags']['client_portal'] ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="toggleClientPortal">Client Portal (framework ready)</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="toggleRegionalTax" <?= $config['feature_flags']['regional_tax'] ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="toggleRegionalTax">Regional Tax Rules (framework ready)</label>
                </div>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">PDF Storage</h5>
            </div>
            <div class="card-body">
                <p class="text-muted small">Configured to store PDF attachments only. Future enhancements can extend storage rules.</p>
                <div class="mb-3">
                    <label class="form-label">Storage Location</label>
                    <input type="text" class="form-control" value="/storage/pdfs" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Retention Policy</label>
                    <input type="text" class="form-control" value="36 months">
                </div>
                <button class="btn btn-outline-primary">Update Policy</button>
            </div>
        </div>
    </div>
</div>
