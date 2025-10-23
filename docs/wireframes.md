# Wireframe Specifications

The following textual wireframes describe primary screens. Each layout should be implemented with responsive Bootstrap components.

## 1. Project Overview
```
+------------------------------------------------------------------------------------+
| Header: Page title "Projects" with action buttons [New Project] [Import Quote]     |
+------------------------------------------------------------------------------------+
| Filter Row: Department (dropdown), Status (multi-select), Date Range (default 90d), |
|            Search (text)                                                            |
+------------------------------------------------------------------------------------+
| Table:                                                                             |
|  --------------------------------------------------------------------------------  |
| | Project | Client | Department | Latest Quote | Status | Owner | Last Updated | | |
|  --------------------------------------------------------------------------------  |
| | ... rows ...                                                                     |
+------------------------------------------------------------------------------------+
| Footer: Pagination + Quick stats (Total Active, Pending Approval, Forecast Value)  |
+------------------------------------------------------------------------------------+
```

## 2. Quote Builder
```
+------------------------------------------------------------------------------------+
| Header: Project name, Department badge, Version selector [v1 ▼], Status badge       |
| Toolbar: [Save Draft] [Submit for Approval] [Generate PDF] [Audit Trail]            |
+------------------------------------------------------------------------------------+
| Left Sidebar (Rooms)                                                                |
|  - List group of rooms with add/remove buttons                                      |
|  - Button [Add Room]                                                                |
|                                                                                    |
| Main Content (Tabbed)                                                               |
|  Tabs: [Equipment] [Labor] [Third-Party] [Summary]                                  |
|  Tab Body:                                                                          |
|   - Data grid with inline editable rows (Bootstrap tables + form controls)          |
|   - Totals footer per tab                                                           |
| Summary Tab:                                                                        |
|   - Cards showing cost/price breakdown, margin, taxes (placeholder)                 |
+------------------------------------------------------------------------------------+
| Right Panel (Attachments & Notes)                                                   |
|  - Upload PDF (drag-and-drop)                                                       |
|  - List of existing attachments with version tags                                   |
|  - Comment stream with timestamps                                                   |
+------------------------------------------------------------------------------------+
```

## 3. Dashboard & Metric Builder
```
+------------------------------------------------------------------------------------+
| Header: Personalized greeting, [Add Metric] button, Date range pill (default 90d)    |
+------------------------------------------------------------------------------------+
| Widget Grid (Bootstrap cards in responsive columns)                                 |
|  - KPI Tiles, Line/Bar charts, Tables                                               |
|  - Drag handle (icon) for rearranging widgets                                       |
+------------------------------------------------------------------------------------+
| Metric Builder Modal                                                                |
|  Step 1: Select Dataset (dropdown)                                                  |
|  Step 2: Define Filters (pill selectors + department prefilled)                     |
|  Step 3: Choose Aggregation (sum, avg, count, custom)                               |
|  Step 4: Pick Visualization (KPI, chart, table)                                     |
|  Step 5: Visibility (Personal / Department / Global)                                |
|  Actions: [Preview] [Save Metric]                                                   |
+------------------------------------------------------------------------------------+
```

## 4. Notification Center
```
+------------------------------------------------------------------------------------+
| Header: "Notifications" with toggle [My Department | All Departments*] (*if allowed) |
+------------------------------------------------------------------------------------+
| Tabs: [Unread] [All] [Settings]                                                     |
| Unread/All Panels: List group with each item showing icon, title, description, time |
| Settings Panel: Toggle switches for event types, future placeholders for email/Teams|
+------------------------------------------------------------------------------------+
```

## 5. Vendor Import Workflow
```
+------------------------------------------------------------------------------------+
| Step Progress Header: Upload > Map > Validate > Confirm                             |
+------------------------------------------------------------------------------------+
| Step Content (example for Map):                                                     |
|  - Left column: Detected columns from Excel                                         |
|  - Right column: Dropdown to map to system fields                                   |
|  - Alerts: Validation messages with Bootstrap alerts                                |
| Footer Buttons: [Back] [Next] [Cancel]                                              |
+------------------------------------------------------------------------------------+
```

## 6. Audit Log Viewer
```
+------------------------------------------------------------------------------------+
| Header: "Audit Log" with filters (Event Type, Quote, User, Date Range)               |
+------------------------------------------------------------------------------------+
| Timeline View: Vertical timeline with event cards showing user, action, timestamp,  |
|               expandable payload details                                            |
+------------------------------------------------------------------------------------+
```

## 7. Client Portal Framework (Placeholder)
```
+------------------------------------------------------------------------------------+
| Login Page: Client logo, email + token fields, disabled "Sign in" button            |
+------------------------------------------------------------------------------------+
| Dashboard: Message "Client portal coming soon" with placeholder navigation         |
|            [Quotes] [Approvals] [Documents]                                         |
+------------------------------------------------------------------------------------+
| Quote Detail: Read-only summary cards, download button, future "Approve" action     |
+------------------------------------------------------------------------------------+
```

