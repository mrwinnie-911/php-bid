document.addEventListener('DOMContentLoaded', () => {
    const metricButtons = document.querySelectorAll('#metricBuilderModal .list-group-item');
    metricButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const metricName = button.querySelector('strong')?.textContent ?? 'Custom Metric';
            const saveButton = document.querySelector('#metricBuilderModal button.btn-primary');
            if (saveButton) {
                saveButton.textContent = `Save "${metricName}" Metric`;
            }
        });
    });
});
