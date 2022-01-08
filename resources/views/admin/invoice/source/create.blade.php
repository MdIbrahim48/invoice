@extends('layouts.admin.admin_app')
@section('admin_content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">All Invoice</a></li>
                                <li class="breadcrumb-item active">Source Invoice</li>
                            </ol>
                        </div>
                        <a href="#" class="mb-sm-0 font-size-18 btn btn-primary">All Invoice</a>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-center" style="color: #ffffff">Add Source Invoice</h4>
                        </div>
                        <div class="card-body">
                            <div id="app">
                                <div>
                                    <div>
                                        <div>
                                            <section id="invoice">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-12"></div>
                                                        <div class="col-lg-12">
                                                            <div class="invoice">
                                                                <div class="row">
                                                                    <div class="col-lg-12 mb-4">
                                                                        <div class="invoice-left">
                                                                            <form
                                                                                action="{{ route('admin.invoice.sourceStore') }}"
                                                                                method="post"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 mt-4">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-5 col-md-5">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                for="">Billing
                                                                                                                From</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <div
                                                                                                            class="form-group">

                                                                                                            <input
                                                                                                                type="text"
                                                                                                                name="billing_from_name"
                                                                                                                placeholder="Name"
                                                                                                                value="{{ $setting->company_name }}"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                name="billing_from_phone"
                                                                                                                value="{{ $setting->phone }}"
                                                                                                                placeholder="Phone"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-3">
                                                                                                        <div
                                                                                                            class="form-group">
<textarea
    name="billing_from_address"
    id=""
    cols="30"
    placeholder="Address"
    rows="2"
    class="form-control">{{ $setting->address }}</textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-2 col-md-2"></div>
                                                                                            <div
                                                                                                class="col-lg-5 col-md-5">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                for="">Billing
                                                                                                                To</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-6">

                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <select
                                                                                                                class="form-control"
                                                                                                                name="billingToName"
                                                                                                                data-trigger
                                                                                                                name="choices-single-default"
                                                                                                                id="billingName"
                                                                                                                placeholder="This is a search placeholder">
                                                                                                                <option
                                                                                                                    value="">
                                                                                                                    This
                                                                                                                    is a
                                                                                                                    placeholder
                                                                                                                </option>
                                                                                                                @foreach ($billingsTo as $billingTo)
                                                                                                                    <option
                                                                                                                        value="{{$billingTo->name}}">{{$billingTo->name}}</option>
                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                id="billing_to_phone"
                                                                                                                name="billing_to_phone"
                                                                                                                value=""
                                                                                                                placeholder="Phone"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-3">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <textarea
                                                                                                                name="billing_to_address"
                                                                                                                id="billing_to_address"
                                                                                                                placeholder="Address"
                                                                                                                cols="30"
                                                                                                                rows="2"
                                                                                                                class="form-control"></textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="card">
                                                                                        <div class="card-body">

                                                                                            <table id="myTable"
                                                                                                   class="table table-striped">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th>Serial</th>
                                                                                                    <th>Product Name
                                                                                                    </th>
                                                                                                    <th>Image</th>
                                                                                                    <th>Description</th>
                                                                                                    <th>Quantity</th>
                                                                                                    <th>Price</th>
                                                                                                    <th>Total</th>
                                                                                                    <th></th>
                                                                                                </tr>
                                                                                                </thead>

                                                                                                <tbody id="table-body">
                                                                                                @include('includes.products')
                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                <tr>
                                                                                                    <td><input
                                                                                                            type="number"
                                                                                                            id="serial"
                                                                                                            class="form-control"
                                                                                                            placeholder="Serial">
                                                                                                    </td>
                                                                                                    <td><input
                                                                                                            type="text"
                                                                                                            id="name"
                                                                                                            onkeyup="sourceProduct()"
                                                                                                            name="product_name"
                                                                                                            class="form-control"
                                                                                                            placeholder="Product Name">
                                                                                                    </td>
                                                                                                    <td><img id="img"
                                                                                                             src="">
                                                                                                    </td>
                                                                                                    <td><textarea
                                                                                                            name="description"
                                                                                                            class="form-control"
                                                                                                            id="details"
                                                                                                            cols="50"
                                                                                                            placeholder="Details"
                                                                                                            rows="3"></textarea>
                                                                                                    </td>
                                                                                                    <td><input
                                                                                                            type="number"
                                                                                                            id="qty"
                                                                                                            value="1"
                                                                                                            onkeyup="calculateTotal()"
                                                                                                            name="quantity"
                                                                                                            class="form-control"
                                                                                                            placeholder="Quantity">
                                                                                                    </td>
                                                                                                    <td><input
                                                                                                            type="number"
                                                                                                            id="price"
                                                                                                            name="price"
                                                                                                            onkeyup="calculateTotal()"
                                                                                                            class="form-control"
                                                                                                            placeholder="Price">
                                                                                                    </td>
                                                                                                    <td><input
                                                                                                            type="text"
                                                                                                            id="total"
                                                                                                            name="total"
                                                                                                            class="form-control"
                                                                                                            readonly
                                                                                                            placeholder="Total">
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            onclick="savaData()"
                                                                                                            class="btn btn-sm btn-success">
                                                                                                            save
                                                                                                        </button>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-12">
                                                                                        <div class="row ">
                                                                                            <div
                                                                                                class="col-lg-5 col-md-5">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-1">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-lg-5 pr-lg-1">
                                                                                                                <label
                                                                                                                    for="">Source
                                                                                                                    Status</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-lg-7 pl-lg-1">
                                                                                                                <select
                                                                                                                    class="form-control"
                                                                                                                    name="source_status_id"
                                                                                                                    id="">
                                                                                                                    <option
                                                                                                                        value>
                                                                                                                        ---Select
                                                                                                                        Status---
                                                                                                                    </option>
                                                                                                                    @foreach ($sourceStatus as $sourceStatusitem)
                                                                                                                        <option
                                                                                                                            value="{{ $sourceStatusitem->id }}">{{ $sourceStatusitem->source_status }}</option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-2">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-lg-5 pr-lg-1">
                                                                                                                <label
                                                                                                                    for="">
                                                                                                                    Payment
                                                                                                                    Method</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-lg-7 pl-lg-1">
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    name="payment_method"
                                                                                                                    value="Cash"
                                                                                                                    class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-2">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-lg-5 pr-lg-1">
                                                                                                                <label
                                                                                                                    for="">
                                                                                                                    Due
                                                                                                                    Date</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-lg-7 pl-lg-1">
                                                                                                                <input
                                                                                                                    type="date"
                                                                                                                    name="due_date"
                                                                                                                    class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-2">
                                                                                                        <div
                                                                                                            class="row align-items-end">
                                                                                                            <div
                                                                                                                class="col-lg-6">
                                                                                                                <div
                                                                                                                    class="row">
                                                                                                                    <div
                                                                                                                        class="col-lg-12">
                                                                                                                        <div
                                                                                                                            class="row">
                                                                                                                            <div
                                                                                                                                class="col-lg-12 pr-lg-1">
                                                                                                                                <label
                                                                                                                                    for="">Notes</label>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="col-lg-12 pl-lg-1">
<textarea
    name="notes"
    class="form-control"
    id=""
    cols="25"
    rows="3"
    placeholder="Thanks For Shopping"></textarea>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="col-lg-12">
                                                                                                                        <div
                                                                                                                            class="row mt-2">
                                                                                                                            <div
                                                                                                                                class="col-lg-12 pr-lg-1">
                                                                                                                                <label
                                                                                                                                    for="">Terms-Condition</label>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="col-lg-12 pl-lg-1">
<textarea
    name="terms_condition"
    class="form-control"
    id=""
    cols="25"
    rows="3"
    placeholder="Please Read Our Terms & Condition"></textarea>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-lg-2"></div>
                                                                                                            <div
                                                                                                                class="col-lg-4">
                                                                                                                <div
                                                                                                                    class="row">
                                                                                                                    <div
                                                                                                                        class="col-lg-12">
                                                                                                                        <div
                                                                                                                            class="row mb-4">
                                                                                                                            <div
                                                                                                                                class="col-lg-12 pl-lg-1">
                                                                                                                                <input
                                                                                                                                    name="signature"
                                                                                                                                    type="text"
                                                                                                                                    placeholder="Signature Name"
                                                                                                                                    class="form-control">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="col-lg-12">
                                                                                                                        <div
                                                                                                                            class="row mb-4">
                                                                                                                            <div
                                                                                                                                class="col-lg-12 pl-lg-1">
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    name="position"
                                                                                                                                    placeholder="Position"
                                                                                                                                    class="form-control">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-2 col-md-2"></div>
                                                                                            <div
                                                                                                class="col-lg-5 col-md-5 mt-2">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-3">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-6 col-lg-4 pl-lg-1 pr-1">
                                                                                                                <label
                                                                                                                    for="">Subtotal</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-6 col-lg-6 pl-1">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    placeholder="0"
                                                                                                                    name="sub_total"
                                                                                                                    disabled="disabled"
                                                                                                                    id="sub_total"
                                                                                                                    class="price form-control">
                                                                                                                <div
                                                                                                                    class="price-symbol">
                                                                                                                    ৳
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-1">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-6 col-lg-4 pl-lg-1 pr-1">
                                                                                                                <label
                                                                                                                    for="">Tax</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-6 col-lg-6 pl-1">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    name="tax"
                                                                                                                    placeholder="0"
                                                                                                                    id="tax"
                                                                                                                    onblur="calculateGrandTotal()"
                                                                                                                    class="price form-control">
                                                                                                                <div
                                                                                                                    class="price-symbol">
                                                                                                                    %
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-1">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-6 col-lg-4 pl-lg-1 pr-1">
                                                                                                                <label
                                                                                                                    for="">Shipping
                                                                                                                    Cost</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-6 col-lg-6 pl-1">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    name="shipping_cost"
                                                                                                                    placeholder="0"
                                                                                                                    id="shipping_cost"
                                                                                                                    onblur="calculateGrandTotal()"
                                                                                                                    class="price form-control">
                                                                                                                <div
                                                                                                                    class="price-symbol">
                                                                                                                    ৳
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <hr style="margin-top: 10px; margin-bottom: 5px;">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-1">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-6 col-lg-4 pl-lg-1 pr-1">
                                                                                                                <label
                                                                                                                    for="">Discount</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-6 col-lg-6 pl-1">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    name="discount"
                                                                                                                    placeholder="0"
                                                                                                                    id="discount"
                                                                                                                    onblur="calculateGrandTotal()"
                                                                                                                    class="price form-control">
                                                                                                                <div
                                                                                                                    class="price-symbol">
                                                                                                                    %
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <hr style="margin-top: 10px; margin-bottom: 5px;">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-1">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-6 col-lg-4 pl-lg-1 pr-1">
                                                                                                                <label
                                                                                                                    for="">Grand
                                                                                                                    Total</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-6 col-lg-6 pl-1">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    name="grand_total"
                                                                                                                    placeholder="0"
                                                                                                                    disabled="disabled"
                                                                                                                    id="grand_total"
                                                                                                                    class="price form-control">
                                                                                                                <div
                                                                                                                    class="price-symbol">
                                                                                                                    ৳
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-1">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-6 col-lg-4 pl-lg-1 pr-1">
                                                                                                                Amount
                                                                                                                Paid
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-6 col-lg-6 pl-1">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    name="amout_paid"
                                                                                                                    placeholder="0"
                                                                                                                    class="price form-control">
                                                                                                                <div
                                                                                                                    class="price-symbol">
                                                                                                                    ৳
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12 mt-1">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-6 col-lg-4 pl-lg-1 pr-1">
                                                                                                                <label
                                                                                                                    for="">Total
                                                                                                                    Due</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-6 col-lg-6 pl-1">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    name="total_due"
                                                                                                                    placeholder="0"
                                                                                                                    disabled="disabled"
                                                                                                                    class="price form-control">
                                                                                                                <div
                                                                                                                    class="price-symbol">
                                                                                                                    ৳
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-8 m-auto">
                                                                                    <button class="btn btn-primary"
                                                                                            style="margin-left: 40%"
                                                                                            type="submit">Save
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@section('admin_scripts')
    @if (Session::has('alert-success'))
        <script>
            toastr.success("{!! Session::get('alert-success') !!}");
        </script>
    @endif

    <script>

        $(document).ready(function () {
            calculateSubTotal();
            calculateGrandTotal();
        });

        $('#billingName').change(function () {
            let billingTo_id = $(this).val();
            if (billingTo_id) {
                $.ajax({
                    type: 'GET',
                    url: "{{url('/admin/invoice/billing/name')}}/" + billingTo_id,
                    success: function (e) {
                        document.getElementById('billing_to_phone').value = response.phone;
                        document.getElementById('billing_to_address').value = response.address;
                    }
                })
            }
        })
    </script>

    <script>
        function savaData() {
            var serial = document.getElementById("serial");
            var name = document.getElementById('name');
            var details = document.getElementById('details');
            var price = document.getElementById('price');
            var qty = document.getElementById('qty');

            $.ajax({
                type: 'GET',
                url: '{!!URL::to('admin/invoice/savedata/')!!}',
                data: {
                    'serial': serial.value,
                    'name': name.value,
                    'details': details.value,
                    'price': price.value,
                    'qty': qty.value
                },
                success: function (response) {
                    $('#table-body').html(response.view);
                    document.getElementById("serial").value = "";
                    document.getElementById("name").value = "";
                    document.getElementById("details").value = "";
                    document.getElementById("qty").value = "";
                    document.getElementById("total").value = "";
                    document.getElementById("price").value = "";
                    calculateSubTotal();
                    calculateGrandTotal();
                },

            });
        }

        function calculateSubTotal() {
            let subTotal = 0;
            $(".products .total").each(function () {
                let value = $(this).text();
                subTotal += parseFloat(value);
            });
            $("#sub_total").val(isNaN(subTotal) ? 0 : subTotal);
        }

        function calculateGrandTotal() {
            let subTotal = $("#sub_total").val();
            let $domTax = $("#tax").val();
            let $domShipCost = $("#shipping_cost").val();
            let $domDiscount = $("#discount").val();
            let tax = isNaN($domTax) ? 0 : $domTax;
            let shipCost = isNaN($domShipCost) ? 0 : Number($domShipCost);
            let discount = isNaN($domDiscount) ? 0 : Number($domDiscount);
            let taxCalculate = (parseFloat(subTotal) * parseFloat(tax)) / 100;
            let taxValue = isNaN(taxCalculate) ? 0 : taxCalculate
            let grandTotal = parseFloat(subTotal) + taxValue + parseFloat(shipCost) - discount;
            $("#grand_total").val(isNaN(grandTotal) ? 0 : grandTotal)
        }

        function removeRow(id) {
            $.ajax({
                type: 'GET',
                url: '{!!URL::to('admin/invoice/removedata')!!}',
                data: {'id': id},
                success: function (response) {
                    $('#table-body').html(response.view);
                },

            });
        }

    </script>

    <script>

        // function billingToName(){
        //     var name = document.getElementById('billingName').value;
        //     $.ajax({
        //         type: 'GET',
        //         url: '{!!URL::to('admin/invoice/billing/name')!!}',
        //         data:{'billingToName':name},
        //         success:function(response){
        //             document.getElementById('billing_to_phone').value = response.phone;
        //             document.getElementById('billing_to_address').value = response.address;
        //         },
        //     })
        // }
    </script>

    <script>
        function sourceProduct() {
            var name = document.getElementById('name').value;
            $.ajax({
                type: 'GET',
                url: '{!!URL::to('admin/invoice/product/name')!!}',
                data: {'productName': name},
                success: function (response) {
                    document.getElementById('price').value = response.selling_price;
                    document.getElementById('img').src = "{{ asset('photo/product/') }}/" + response.image;
                },
            })
        }

        function calculateTotal() {
            let productPrice = $("#price").val();
            let productQty = $("#qty").val();
            let total = parseFloat(productPrice) * parseFloat(productQty);
            $("#total").val(isNaN(total) ? 0 : total);

        }
    </script>

@endsection

@endsection


















