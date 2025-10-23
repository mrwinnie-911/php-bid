<?php

$departments = [
    'AV' => 'Audio Visual',
    'LV' => 'Low Voltage',
    'SEC' => 'Security',
];

$projects = [
    [
        'id' => 'PRJ-1024',
        'name' => 'Downtown HQ Retrofit',
        'client' => 'Harrison Financial',
        'department' => 'AV',
        'status' => 'In Design',
        'updated_at' => '2024-05-02',
    ],
    [
        'id' => 'PRJ-1041',
        'name' => 'Logistics Center Expansion',
        'client' => 'SpeedShip Logistics',
        'department' => 'LV',
        'status' => 'Awaiting Approval',
        'updated_at' => '2024-04-28',
    ],
    [
        'id' => 'PRJ-1043',
        'name' => 'Retail Flagship Opening',
        'client' => 'Parallel Threads',
        'department' => 'SEC',
        'status' => 'Proposal Delivered',
        'updated_at' => '2024-04-22',
    ],
];

$quotes = [
    [
        'id' => 'Q-2201',
        'project_id' => 'PRJ-1024',
        'version' => 'v3',
        'status' => 'In Review',
        'value' => 187500,
        'owner' => 'C. Ramirez',
        'updated_at' => '2024-05-02',
    ],
    [
        'id' => 'Q-2205',
        'project_id' => 'PRJ-1041',
        'version' => 'v1',
        'status' => 'Draft',
        'value' => 94200,
        'owner' => 'J. Li',
        'updated_at' => '2024-04-29',
    ],
    [
        'id' => 'Q-2207',
        'project_id' => 'PRJ-1043',
        'version' => 'v2',
        'status' => 'Approved',
        'value' => 138400,
        'owner' => 'K. Patel',
        'updated_at' => '2024-04-23',
    ],
];

$notifications = [
    [
        'title' => 'Quote Q-2205 moved to Draft',
        'message' => 'Initial scope imported from site survey.',
        'time' => '2 hours ago',
        'department' => 'LV',
    ],
    [
        'title' => 'Version v3 submitted for approval',
        'message' => 'Q-2201 awaits manager review.',
        'time' => '6 hours ago',
        'department' => 'AV',
    ],
    [
        'title' => 'New RFI uploaded',
        'message' => 'Retail Flagship Opening project.',
        'time' => '1 day ago',
        'department' => 'SEC',
    ],
];

$metrics = [
    [
        'title' => '90-Day Pipeline',
        'value' => '$1.2M',
        'change' => '+8%',
        'description' => 'All open quotes in your department.',
    ],
    [
        'title' => 'Average Quote Cycle',
        'value' => '11.4 days',
        'change' => '-2 days',
        'description' => 'Draft to approval timeline.',
    ],
    [
        'title' => 'Win Rate',
        'value' => '42%',
        'change' => '+5%',
        'description' => 'Closed-won vs total decisions.',
    ],
];

$metric_templates = [
    [
        'category' => 'Financial',
        'name' => 'Revenue Forecast',
        'definition' => 'Sum of projected revenue across approved quotes in next 90 days.',
    ],
    [
        'category' => 'Operational',
        'name' => 'Labor Utilization',
        'definition' => 'Actual vs planned labor hours per department.',
    ],
    [
        'category' => 'Sales',
        'name' => 'Pending Approvals',
        'definition' => 'Quotes currently awaiting manager review.',
    ],
];

$imports = [
    [
        'vendor' => 'Global AV Supply',
        'uploaded_by' => 'S. Ortega',
        'uploaded_at' => '2024-04-30',
        'status' => 'Validated',
        'items_added' => 164,
    ],
    [
        'vendor' => 'Metro Cabling Co.',
        'uploaded_by' => 'R. King',
        'uploaded_at' => '2024-04-25',
        'status' => 'Needs Review',
        'items_added' => 0,
    ],
];

$audit_events = [
    [
        'quote' => 'Q-2201',
        'event' => 'Status changed to In Review',
        'user' => 'C. Ramirez',
        'time' => '2024-05-02 14:36',
    ],
    [
        'quote' => 'Q-2207',
        'event' => 'Version v2 approved',
        'user' => 'A. Singh',
        'time' => '2024-04-23 09:05',
    ],
    [
        'quote' => 'Q-2205',
        'event' => 'Draft created from import',
        'user' => 'J. Li',
        'time' => '2024-04-29 11:18',
    ],
];
