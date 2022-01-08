
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
                            <li class="breadcrumb-item active">Source Invoice</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.client.create') }}" class="mb-sm-0 font-size-18 btn btn-primary"><i class="fas fa-plus"></i>Add Client</a>
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
                                                             <form action="#" method="">
                                                                <div class="row">
                                                                   {{-- <div class="col-lg-12">
                                                                      <div class="row align-items-end">
                                                                         <div class="col-lg-8 col-md-6">
                                                                            <div class="row">
                                                                               <div class="col-lg-6">
                                                                                  <div class="form-group">
                                                                                     <input type="date" class="form-control">
                                                                                  </div>
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-4 col-md-6">
                                                                            <div class="company-info">
                                                                               <div class="form-group">
                                                                                 <input type="file" class="form-control mb-2">
                                                                                  <input type="text" placeholder="Company Name" class="form-control mb-2">
                                                                                  <input type="text" placeholder="Company Tag Lines" class="form-control">
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                      </div>
                                                                   </div> --}}
                                                                   <div class="col-lg-12 mt-4">
                                                                      <div class="row">
                                                                         <div class="col-lg-5 col-md-5">
                                                                            <div class="row">
                                                                               <div class="col-lg-12">
                                                                                  <div class="form-group">
                                                                                     <label for="">Billing From</label>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-6">
                                                                                  <div class="form-group">
                                                                                     <input type="text" name="name" placeholder="Name" class="form-control">
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-6">
                                                                                  <div class="form-group">
                                                                                     <input type="text" name="phone" placeholder="Phone" class="form-control">
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-3">
                                                                                  <div class="form-group">
                                                                                     <textarea name="" id="" cols="30" placeholder="Address" rows="2" class="form-control"></textarea>
                                                                                  </div>
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-2 col-md-2"></div>
                                                                         <div class="col-lg-5 col-md-5">
                                                                            <div class="row">
                                                                               <div class="col-lg-12">
                                                                                  <div class="form-group">
                                                                                     <label for="">Billing To</label>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-6">
                                                                                  <div class="form-group">
                                                                                     <input type="text" name="name" placeholder="Name" class="form-control">
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-6">
                                                                                  <div class="form-group">
                                                                                     <input type="text" name="phone" placeholder="Phone" class="form-control">
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-3">
                                                                                  <div class="form-group">
                                                                                     <textarea name="" id="" placeholder="Address" cols="30" rows="2" class="form-control"></textarea>
                                                                                  </div>
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                      </div>
                                                                   </div>

                                                                   {{-- <div class="col-lg-12 mt-4">
                                                                      <div class="row">
                                                                         <div class="col-lg-4 pr-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="text" value="Product Information" class="form-control">
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-2 pr-lg-1 pl-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="text" value="Quantity" class="form-control">
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-2 pr-lg-1 pl-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="text" value="Rate" class="form-control">
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-3 pl-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="text" value="Total" class="form-control">
                                                                            </div>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <div class="col-lg-12">
                                                                      <div class="row">
                                                                         <div class="col-lg-4 pr-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="text" placeholder="Product Information" class="form-control">
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-2 pr-lg-1 pl-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="number" placeholder="0" class="form-control">
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-2 pr-lg-1 pl-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="number" placeholder="0" class="price form-control">
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-3 pl-lg-1">
                                                                            <div class="form-group">
                                                                               <input type="number" placeholder="0" disabled="disabled" class="price form-control">
                                                                            </div>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <div class="col-lg-12">
                                                                      <button type="submit" class="btn btn-sm bg-info">Add</button>
                                                                   </div> --}}

                                                                <div class="card">
                                                                    <div class="card-body">

                                                                    <table id="myTable" class="table table-striped">
                                                                        <thead>
                                                                          <tr>
                                                                            <th>Serial</th>
                                                                            <th>Caton Number</th>
                                                                            <th>Category</th>
                                                                            <th>Total Weight</th>
                                                                            <th>Rate</th>
                                                                            <th>Total</th>
                                                                            <th></th>
                                                                          </tr>
                                                                        </thead>

                                                                        <tbody id="table-body" >
                                                                            @include('includes.products')
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td><input type="number" id="serial" class="form-control" placeholder="serial"></td>
                                                                                <td><input type="number" id="name" class="form-control" placeholder="caton number"></td>
                                                                                <td><input type="text" id="details" class="form-control" placeholder="category"></td>
                                                                                <td><input type="text" id="details" class="form-control" placeholder="total weight"></td>
                                                                                <td><input type="number" id="details" class="form-control" placeholder="rate"></td>
                                                                                <td><input type="text" id="price" class="form-control" placeholder="Total"></td>
                                                                                <td><button type="submit" onclick="savaData()" class="btn btn-sm btn-success">save</button></td>
                                                                            </tr>
                                                                        </tfoot>
                                                                      </table>
                                                                    </div>
                                                                </div>

                                                                   <div class="col-lg-12">
                                                                      <div class="row ">
                                                                         <div class="col-lg-5 col-md-5">
                                                                            <div class="row">
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-lg-5 pr-lg-1"><label for="">Status</label></div>
                                                                                     <div class="col-lg-7 pl-lg-1">
                                                                                        <select class="form-control" name="" id="">
                                                                                            <option value>---Select Status---</option>
                                                                                            @foreach ($shipmentStatus as $shipmentStatusitem)
                                                                                                <option value="{{ $shipmentStatusitem->id }}">{{ $shipmentStatusitem->shipment_status }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-2">
                                                                                    <div class="row">
                                                                                    <div class="col-lg-5 pr-lg-1"><label for="">Image</label></div>
                                                                                    <div class="col-lg-7 pl-lg-1"><input type="file" class="form-control"></div>
                                                                                    </div>
                                                                                </div>
                                                                               <div class="col-lg-12 mt-2">
                                                                                  <div class="row">
                                                                                     <div class="col-lg-5 pr-lg-1"><label for="">Description</label></div>
                                                                                     <div class="col-lg-7 pl-lg-1"><textarea name="" class="form-control" id="" cols="50" rows="3"></textarea></div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-2">
                                                                                  <div class="row">
                                                                                     <div class="col-lg-5 pr-lg-1"><label for=""> Payment Method</label></div>
                                                                                     <div class="col-lg-7 pl-lg-1"><input type="text" value="Cash" class="form-control"></div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-2">
                                                                                  <div class="row">
                                                                                     <div class="col-lg-5 pr-lg-1"><label for=""> Due Date</label></div>
                                                                                     <div class="col-lg-7 pl-lg-1"><input type="date" class="form-control"></div>
                                                                                  </div>
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-2 col-md-2"></div>
                                                                         <div class="col-lg-5 col-md-5 mt-2">
                                                                            <div class="row">
                                                                               <div class="col-lg-12 mt-3">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1"><label for="">Subtotal</label></div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" disabled="disabled" class="price form-control">
                                                                                        <div class="price-symbol">৳</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1"><label for="">Tax</label></div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" class="price form-control">
                                                                                        <div class="price-symbol">%</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1"><label for="">Shipping Cost</label></div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" class="price form-control">
                                                                                        <div class="price-symbol">৳</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12">
                                                                                  <hr style="margin-top: 10px; margin-bottom: 5px;">
                                                                               </div>
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1"><label for="">Discount</label></div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" class="price form-control">
                                                                                        <div class="price-symbol">%</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12">
                                                                                  <hr style="margin-top: 10px; margin-bottom: 5px;">
                                                                               </div>
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1"><label for="">Grand Total</label></div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" disabled="disabled" class="price form-control">
                                                                                        <div class="price-symbol">৳</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1">Amount Paid</div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" class="price form-control">
                                                                                        <div class="price-symbol">৳</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1">Evm Fee</div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" class="price form-control">
                                                                                        <div class="price-symbol">৳</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12 mt-1">
                                                                                  <div class="row">
                                                                                     <div class="col-6 col-lg-4 pl-lg-1 pr-1"><label for="">Total Due</label></div>
                                                                                     <div class="col-6 col-lg-6 pl-1">
                                                                                        <input type="number" placeholder="0" disabled="disabled" class="price form-control">
                                                                                        <div class="price-symbol">৳</div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   {{-- <div class="col-lg-12 mt-2">
                                                                      <div class="row align-items-end">
                                                                         <div class="col-lg-4 col-md-6">
                                                                            <div class="row">
                                                                               <div class="col-lg-12">
                                                                                  <div class="row">
                                                                                     <div class="col-lg-12 pr-lg-1"><input type="text" value="Notes :" class="form-control border-0"></div>
                                                                                     <div class="col-lg-12 pr-lg-1">
                                                                                        <div class="form-group"><textarea name="address" placeholder="Thanks For Shopping. No refund if product is damaged." cols="30" class="form-control"></textarea></div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <div class="col-lg-12">
                                                                                  <div class="row">
                                                                                     <div class="col-lg-12 pr-lg-1"><input type="text" value="Terms &amp; Conditions :" class="form-control border-0"></div>
                                                                                     <div class="col-lg-12 pr-lg-1">
                                                                                        <div class="form-group"><textarea name="address" placeholder="Please read our terms &amp; conditions." cols="30" class="form-control"></textarea></div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                         <div class="col-lg-4 col-md-2"></div>
                                                                         {{-- <div class="col-lg-4 col-md-4">
                                                                            <div class="row">
                                                                               <div class="col-lg-12 pl-lg-1">
                                                                                  <hr style="margin-top: 10px; margin-bottom: 5px;">
                                                                               </div>
                                                                               <div class="col-lg-12 pl-lg-1">
                                                                                  <div class="form-group"><input type="text" placeholder="Signature Name" class="form-control"></div>
                                                                               </div>
                                                                               <div class="col-lg-12 pl-lg-1">
                                                                                  <div class="form-group"><input type="text" placeholder="Position" class="form-control"></div>
                                                                               </div>
                                                                            </div>
                                                                         </div>
                                                                      </div>
                                                                   </div> --}}
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
        function savaData(){
         var serial = document.getElementById("serial");

         var name = document.getElementById('name');
         var details = document.getElementById('details');
         var price = document.getElementById('price');
         var qty = document.getElementById('qty');

         $.ajax({
                 type:'GET',
                 url:'{!!URL::to('savedata')!!}',
                 data:{'serial':serial.value,'name':name.value,'details':details.value,'price':price.value,'qty':qty.value},
                 success:function(response){
                     $('#table-body').html(response.view);
                     document.getElementById("serial").value = "";
                     document.getElementById("name").value = "";
                     document.getElementById("details").value = "";
                     document.getElementById("qty").value = "";
                     document.getElementById("line_total").value = "";
                 },

             });
         }

         function removeRow(id){
             $.ajax({
                 type:'GET',
                 url:'{!!URL::to('removedata')!!}',
                 data:{'id':id},
                 success:function(response){
                     $('#table-body').html(response.view);
                 },

             });
         }

    </script>

    @endsection

@endsection
