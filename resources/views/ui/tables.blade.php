@extends('layouts.app')

@section('title', 'Table Guide')

@section('content')
    <div class="mb-6">
        <h2 class="h2 mb-2">Table Elements</h2>
        <p class="text-secondary text-sm">Structured data presentation with clean, modern styling.</p>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Basic Table</h4>
        <div class="card">
            <div class="card-header">
                <div>
                    <h4 class="card-title">Users List</h4>
                    <p class="card-subtitle">Standard data display</p>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="data-table w-full">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Administrator</td>
                                <td><span class="badge badge-success text-xs">Active</span></td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td>Editor</td>
                                <td><span class="badge badge-success text-xs">Active</span></td>
                            </tr>
                            <tr>
                                <td>Bob Johnson</td>
                                <td>bob@example.com</td>
                                <td>Viewer</td>
                                <td><span class="badge badge-secondary text-xs">Inactive</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Striped Rows</h4>
        <div class="card">
            <div class="card-header">
                <div>
                    <h4 class="card-title">Employee Roster</h4>
                    <p class="card-subtitle">Alternating row colors for better readability</p>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="data-table table-striped w-full">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Employee Name</th>
                                <th>Department</th>
                                <th>Office</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#EMP-001</td>
                                <td>Sarah Wilson</td>
                                <td>Engineering</td>
                                <td>New York</td>
                            </tr>
                            <tr>
                                <td>#EMP-002</td>
                                <td>Mike Johnson</td>
                                <td>Marketing</td>
                                <td>London</td>
                            </tr>
                            <tr>
                                <td>#EMP-003</td>
                                <td>Emily Davis</td>
                                <td>Design</td>
                                <td>Paris</td>
                            </tr>
                            <tr>
                                <td>#EMP-004</td>
                                <td>Alex Turner</td>
                                <td>Finance</td>
                                <td>Tokyo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Bordered Table</h4>
        <div class="card">
            <div class="card-header">
                <div>
                    <h4 class="card-title">Inventory Report</h4>
                    <p class="card-subtitle">Table with vertical borders for clear column separation</p>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="data-table table-bordered w-full">
                        <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Location</th>
                                <th class="text-end">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#SKU-882</td>
                                <td>Wireless Mouse</td>
                                <td>45</td>
                                <td>Warehouse A</td>
                                <td class="text-end">$1,125</td>
                            </tr>
                            <tr>
                                <td>#SKU-993</td>
                                <td>Mechanical Keyboard</td>
                                <td>12</td>
                                <td>Warehouse B</td>
                                <td class="text-end">$2,400</td>
                            </tr>
                            <tr>
                                <td>#SKU-771</td>
                                <td>USB-C Hub</td>
                                <td>89</td>
                                <td>Store Front</td>
                                <td class="text-end">$3,115</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h4 class="h5 mb-4">Table with Actions</h4>
        <div class="card">
            <div class="card-header">
                <div>
                    <h4 class="card-title">Products</h4>
                    <p class="card-subtitle">Interactive rows</p>
                </div>
                <button class="btn btn-primary text-xs">
                    <i class="fas fa-plus me-1"></i> Add Product
                </button>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="data-table w-full">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th class="text-center" style="width: 1%; white-space: nowrap;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MacBook Pro</td>
                                <td>Laptop</td>
                                <td>$2,499</td>
                                <td class="text-center">
                                    <div class="d-flex justify-center gap-2">
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>iPhone 15 Pro</td>
                                <td>Phone</td>
                                <td>$999</td>
                                <td class="text-center">
                                    <div class="d-flex justify-center gap-2">
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="h3 mb-2">Usage Documentation</h3>
        <p class="text-secondary text-sm">HTML structure for table components.</p>
    </div>

    <div class="code-editor">
        <div class="code-header">
            <div class="d-flex items-center gap-3">
                <div class="d-flex gap-1">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <span class="code-lang ms-2">Table Structure</span>
            </div>
            <button class="copy-btn" onclick="copyToClipboard(this)">
                <i class="far fa-copy"></i> Copy code
            </button>
        </div>
        <pre class="code-content">
&lt;!-- Table Structure --&gt;
&lt;div class="card"&gt;
    &lt;div class="card-header"&gt;
        &lt;h4 class="card-title"&gt;Table Title&lt;/h4&gt;
        &lt;p class="card-subtitle"&gt;Optional description&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card-body p-0"&gt;
        &lt;div class="table-responsive"&gt;
            &lt;table class="data-table w-full"&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th&gt;Column Name&lt;/th&gt;
                        &lt;th class="text-end"&gt;Price&lt;/th&gt;
                        &lt;th class="text-center" style="width: 1%; white-space: nowrap;"&gt;Actions&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Item Data&lt;/td&gt;
                        &lt;td class="text-end"&gt;$0.00&lt;/td&gt;
                        &lt;td class="text-center"&gt;...&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
@endsection
