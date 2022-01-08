<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Order Management</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
      <div id="app">
         <div>
            <div>
               <nav>
               </nav>
               <section>
               </section>
               <div>
                  <section id="invoice">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-12"></div>
                           <div class="col-lg-12">
                              <div class="invoice">
                                 <div class="row">
                                    <div class="col-lg-8 mb-4">
                                       <div class="invoice-left">
                                          <form action="#" method="">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                   <div class="row align-items-end">
                                                      <div class="col-lg-8 col-md-6">
                                                         <div class="row">
                                                            <div class="col-lg-12">
                                                               <div class="form-group">
                                                                  <span>Invoice</span>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                               <div class="form-group">
                                                                  <input type="text" class="form-control">
                                                               </div>
                                                            </div>
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
                                                </div>
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
                                                            <div class="col-lg-12">
                                                               <div class="form-group">
                                                                  <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
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
                                                            <div class="col-lg-12">
                                                               <div class="form-group">
                                                                  <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-12 mt-4">
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
                                                </div>
                                                <div class="col-lg-12">
                                                   <div class="row align-items-center">
                                                      <div class="col-lg-5 col-md-5">
                                                         <div class="row">
                                                            <div class="col-lg-12 mt-1">
                                                               <div class="row">
                                                                  <div class="col-lg-7 pr-lg-1"><input type="text" value="Payment Method" class="form-control "></div>
                                                                  <div class="col-lg-5 pl-lg-1 pr-lg-1"><input type="text" value="Cash" class="form-control"></div>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-12 mt-1">
                                                               <div class="row">
                                                                  <div class="col-lg-5 pr-lg-1"><input type="text" value="Due Date" class="form-control "></div>
                                                                  <div class="col-lg-7 pl-lg-1 pr-lg-1"><input type="date" class="form-control"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-lg-2 col-md-2"></div>
                                                      <div class="col-lg-5 col-md-5 mt-2">
                                                         <div class="row">
                                                            <div class="col-lg-12 mt-3">
                                                               <div class="row">
                                                                  <div class="col-6 col-lg-5 pl-lg-1 pr-1"><input type="text" value="Subtotal" class="  form-control " ></div>
                                                                  <div class="col-6 col-lg-6 pl-1">
                                                                     <input type="number" placeholder="0" disabled="disabled" class="price form-control">
                                                                     <div class="price-symbol">৳</div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-12 mt-1">
                                                               <div class="row">
                                                                  <div class="col-6 col-lg-5 pl-lg-1 pr-1"><input type="text" value="Tax" class="  form-control " ></div>
                                                                  <div class="col-6 col-lg-6 pl-1">
                                                                     <input type="number" placeholder="0" class="price form-control">
                                                                     <div class="price-symbol">%</div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-12 mt-1">
                                                               <div class="row">
                                                                  <div class="col-6 col-lg-5 pl-lg-1 pr-1"><input type="text" value="Shipping" class="  form-control " ></div>
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
                                                                  <div class="col-6 col-lg-5 pl-lg-1 pr-1"><input type="text" value="Discount" class="  form-control " ></div>
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
                                                                  <div class="col-6 col-lg-5 pl-lg-1 pr-1"><input type="text" value="Grand Total" class="  form-control " ></div>
                                                                  <div class="col-6 col-lg-6 pl-1">
                                                                     <input type="number" placeholder="0" disabled="disabled" class="price form-control">
                                                                     <div class="price-symbol">৳</div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-12 mt-1">
                                                               <div class="row">
                                                                  <div class="col-6 col-lg-5 pl-lg-1 pr-1"><input type="text" value="Amount Paid" class="  form-control " ></div>
                                                                  <div class="col-6 col-lg-6 pl-1">
                                                                     <input type="number" placeholder="0" class="price form-control">
                                                                     <div class="price-symbol">৳</div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-12 mt-1">
                                                               <div class="row">
                                                                  <div class="col-6 col-lg-5 pl-lg-1 pr-1"><input type="text" value="Total Due" class="bg-red  form-control " style="background-color: rgb(218, 41, 28);"></div>
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
                                                <div class="col-lg-12 mt-2">
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
                                                      <div class="col-lg-4 col-md-4">
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
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="invoice-right">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="row text-center">
                                                   <div class="col-lg-6 col-md-6 pl-lg-0 mb-2">
                                                      <button to="print" class="btn btn-green btn-sm">
                                                         <svg class="svg-inline--fa fa-download mr-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"></path>
                                                         </svg>
                                                         <!-- <i class="fas fa-download mr-2"></i> Font Awesome fontawesome.com -->Download
                                                      </button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <div class="row">
                                                   <div class="col-lg-12 col-md-6 mt-4">
                                                      <!----> <span class="flag-icon flag-icon-bd"></span>
                                                      <h5 class="mr-2 font-weight-bold text-uppercase" style="display: inline-block;">Currency</h5>
                                                      <hr style="margin-top: 0px; margin-bottom: 10px;">
                                                      <div class="row">
                                                         <div class="col-4 col-lg-4">
                                                            <p class="mr-2">Type</p>
                                                         </div>
                                                         <div class="col-8 col-lg-8">
                                                            <div class="form-group">
                                                               <select class="form-control">
                                                                  <option selected="selected" value="৳">BDT</option>
                                                                  <option value="$">USD</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-lg-12 col-md-6 mt-4">
                                                      <h5 class="mr-2 font-weight-bold text-uppercase" style="display: inline-block;">
                                                         <span>(%)</span> <!---->
                                                         Discount
                                                      </h5>
                                                      <hr style="margin-top: 0px; margin-bottom: 10px;">
                                                      <div class="row">
                                                         <div class="col-4 col-lg-4">
                                                            <p class="mr-2">Type</p>
                                                         </div>
                                                         <div class="col-8 col-lg-8">
                                                            <div class="form-group">
                                                               <select name="discount-type" class="form-control">
                                                                  <option selected="selected" value="%">Percent</option>
                                                                  <option value="flat">Flat</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <footer>
               </footer>
            </div>
         </div>
      </div>
   </body>
</html>
