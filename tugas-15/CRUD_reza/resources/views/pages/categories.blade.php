@extends('main')

@section('title', 'Categories')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0 fw-bold">Category</h2>

        <button class="btn btn-primary">
            <i class="ti ti-plus"></i> Add Category
        </button>
    </div>

    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Category List</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="70">No</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th width="200">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Electronics</td>
                            <td>Electronic Products</td>
                            <td>
                                <button class="btn btn-primary btn-sm">
                                    Update
                                </button>
                                <button class="btn btn-warning btn-sm">
                                    Edit
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Furniture</td>
                            <td>Home Furniture</td>
                            <td>
                                <button class="btn btn-warning btn-sm">
                                    Edit
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Food</td>
                            <td>Food and Beverage</td>
                            <td>
                                <button class="btn btn-warning btn-sm">
                                    Edit
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

@endsection
