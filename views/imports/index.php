<div class="row g-3">
    <div class="col-12 col-lg-5">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                <h5 class="mb-0">Upload Vendor Price Sheet</h5>
            </div>
            <div class="card-body">
                <p class="text-muted small">Accepts Excel files provided by vendors. Mapping and validation occur before import.</p>
                <div class="mb-3">
                    <label for="vendorName" class="form-label">Vendor Name</label>
                    <input type="text" class="form-control" id="vendorName" placeholder="Global AV Supply">
                </div>
                <div class="mb-3">
                    <label for="priceSheet" class="form-label">Price Sheet (.xlsx)</label>
                    <input class="form-control" type="file" id="priceSheet">
                </div>
                <div class="mb-3">
                    <label class="form-label">Import Options</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="updateExisting" checked>
                        <label class="form-check-label" for="updateExisting">Update existing catalog items</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flagChanges" checked>
                        <label class="form-check-label" for="flagChanges">Flag major price changes</label>
                    </div>
                </div>
                <button class="btn btn-primary w-100">Start Import</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-7">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Imports</h5>
                <button class="btn btn-sm btn-outline-primary">Download Template</button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">Vendor</th>
                        <th scope="col">Uploaded By</th>
                        <th scope="col">Uploaded</th>
                        <th scope="col">Status</th>
                        <th scope="col">Items</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($imports as $import): ?>
                        <tr>
                            <td><?= htmlspecialchars($import['vendor']) ?></td>
                            <td><?= htmlspecialchars($import['uploaded_by']) ?></td>
                            <td><?= htmlspecialchars($import['uploaded_at']) ?></td>
                            <td><span class="badge <?= $import['status'] === 'Validated' ? 'bg-success' : 'bg-warning text-dark' ?>"><?= htmlspecialchars($import['status']) ?></span></td>
                            <td><?= htmlspecialchars((string)$import['items_added']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
