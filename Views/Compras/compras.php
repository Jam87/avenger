
<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
    <title><?= $data['page_title']; ?></title>
    <?php MainHead($data); ?>
</head>

<body>


    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ==== Main Headerr ====== -->
        <?php MainHeader($data); ?>

        <!-- ========== App Menu ========== -->
        <?php MainMenu($data); ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Nueva compra</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Compras</a></li>
                                        <li class="breadcrumb-item active">Nueva compra</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                   <!--- ESTA CORRECTO -->
                   <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card">
                                <form class="needs-validation" novalidate id="invoice_form">
                                    <div class="card-body border-bottom border-bottom-dashed p-4">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="profile-user mx-auto  mb-3">
                                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                                                    <label for="profile-img-file-input" class="d-block" tabindex="0">
                                                        <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 60px; width: 256px;">
                                                            <img src="assets/images/logo-dark.png" class="card-logo card-logo-dark user-profile-image img-fluid" alt="logo dark">
                                                            <img src="assets/images/logo-light.png" class="card-logo card-logo-light user-profile-image img-fluid" alt="logo light">
                                                        </span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <div>
                                                        <label for="companyAddress">Address</label>
                                                    </div>
                                                    <div class="mb-2">
                                                        <textarea class="form-control bg-light border-0" id="companyAddress" rows="3" placeholder="Company Address" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter a address
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <input type="text" class="form-control bg-light border-0" id="companyaddpostalcode" minlength="5" maxlength="6" placeholder="Enter Postal Code" required />
                                                        <div class="invalid-feedback">
                                                            The US zip code must contain 5 digits, Ex. 45678
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 ms-auto">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control bg-light border-0" id="registrationNumber" maxlength="12" placeholder="Legal Registration No" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a registration no, Ex., 012345678912
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="email" class="form-control bg-light border-0" id="companyEmail" placeholder="Email Address" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a valid email, Ex., example@gamil.com
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control bg-light border-0" id="companyWebsite" placeholder="Website" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a website, Ex., www.example.com
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control bg-light border-0" data-plugin="cleave-phone" id="compnayContactno" placeholder="Contact No" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a contact number
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="row g-3">
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="invoicenoInput">Invoice No</label>
                                                <input type="text" class="form-control bg-light border-0" id="invoicenoInput" placeholder="Invoice No" value="#VL25000355" readonly="readonly" />
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label for="date-field">Date</label>
                                                    <input type="text" class="form-control bg-light border-0" id="date-field" data-provider="flatpickr" data-time="true" placeholder="Select Date-time">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="choices-payment-status">Payment Status</label>
                                                <div class="input-light">
                                                    <select class="form-control bg-light border-0" data-choices data-choices-search-false id="choices-payment-status" required>
                                                        <option value="">Select Payment Status</option>
                                                        <option value="Paid">Paid</option>
                                                        <option value="Unpaid">Unpaid</option>
                                                        <option value="Refund">Refund</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label for="totalamountInput">Total Amount</label>
                                                    <input type="text" class="form-control bg-light border-0" id="totalamountInput" placeholder="$0.00" readonly />
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="card-body p-4 border-top border-top-dashed">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6">
                                                <div>
                                                    <label for="billingName" class="text-muted text-uppercase fw-semibold">Billing Address</label>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control bg-light border-0" id="billingName" placeholder="Full Name" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a full name
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <textarea class="form-control bg-light border-0" id="billingAddress" rows="3" placeholder="Address" required></textarea>
                                                    <div class="invalid-feedback">
                                                        Please enter a address
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control bg-light border-0" data-plugin="cleave-phone" id="billingPhoneno" placeholder="(123)456-7890" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a phone number
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control bg-light border-0" id="billingTaxno" placeholder="Tax Number" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a tax number
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="same" name="same" onchange="billingFunction()" />
                                                    <label class="form-check-label" for="same">
                                                        Will your Billing and Shipping address same?
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-sm-6 ms-auto">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div>
                                                            <label for="shippingName" class="text-muted text-uppercase fw-semibold">Shipping Address</label>
                                                        </div>
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control bg-light border-0" id="shippingName" placeholder="Full Name" required />
                                                            <div class="invalid-feedback">
                                                                Please enter a full name
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <textarea class="form-control bg-light border-0" id="shippingAddress" rows="3" placeholder="Address" required></textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter a address
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control bg-light border-0" data-plugin="cleave-phone" id="shippingPhoneno" placeholder="(123)456-7890" required />
                                                            <div class="invalid-feedback">
                                                                Please enter a phone number
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control bg-light border-0" id="shippingTaxno" placeholder="Tax Number" required />
                                                            <div class="invalid-feedback">
                                                                Please enter a tax number
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="table-responsive">
                                            <table class="invoice-table table table-borderless table-nowrap mb-0">
                                                <thead class="align-middle">
                                                    <tr class="table-active">
                                                        <th scope="col" style="width: 50px;">#</th>
                                                        <th scope="col">
                                                            Product Details
                                                        </th>
                                                        <th scope="col" style="width: 120px;">
                                                            <div class="d-flex currency-select input-light align-items-center">
                                                                Rate
                                                                <select class="form-selectborder-0 bg-light" data-choices data-choices-search-false id="choices-payment-currency" onchange="otherPayment()">
                                                                    <option value="$">($)</option>
                                                                    <option value="£">(£)</option>
                                                                    <option value="₹">(₹)</option>
                                                                    <option value="€">(€)</option>
                                                                </select>
                                                            </div>
                                                        </th>
                                                        <th scope="col" style="width: 120px;">Quantity</th>
                                                        <th scope="col" class="text-end" style="width: 150px;">Amount</th>
                                                        <th scope="col" class="text-end" style="width: 105px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="newlink">
                                                    <tr id="1" class="product">
                                                        <th scope="row" class="product-id">1</th>
                                                        <td class="text-start">
                                                            <div class="mb-2">
                                                                <input type="text" class="form-control bg-light border-0" id="productName-1" placeholder="Product Name" required />
                                                                <div class="invalid-feedback">
                                                                    Please enter a product name
                                                                </div>
                                                            </div>
                                                            <textarea class="form-control bg-light border-0" id="productDetails-1" rows="2" placeholder="Product Details"></textarea>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control product-price bg-light border-0" id="productRate-1" step="0.01" placeholder="0.00" required />
                                                            <div class="invalid-feedback">
                                                                Please enter a rate
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-step">
                                                                <button type="button" class='minus'>–</button>
                                                                <input type="number" class="product-quantity" id="product-qty-1" value="0" readonly>
                                                                <button type="button" class='plus'>+</button>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <div>
                                                                <input type="text" class="form-control bg-light border-0 product-line-price" id="productPrice-1" placeholder="$0.00" readonly />
                                                            </div>
                                                        </td>
                                                        <td class="product-removal">
                                                            <a href="javascript:void(0)" class="btn btn-success">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="newForm" style="display: none;"><td class="d-none" colspan="5"><p>Add New Form</p></td></tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <a href="javascript:new_link()" id="add-item" class="btn btn-soft-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Add Item</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-top border-top-dashed mt-2">
                                                        <td colspan="3"></td>
                                                        <td colspan="2" class="p-0">
                                                            <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Sub Total</th>
                                                                        <td style="width:150px;">
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-subtotal" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Estimated Tax (12.5%)</th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-tax" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Discount <small class="text-muted">(VELZON15)</small></th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-discount" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Shipping Charge</th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-shipping" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="border-top border-top-dashed">
                                                                        <th scope="row">Total Amount</th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-total" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end table-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </div>
                                        
                                        <!--end row-->
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    
                    

                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card" id="frmCompras">
                                <form class="needs-validation" novalidate id="invoice_form">
									
									<!-- CARGA IMAGEN DE LOGOTIPO | SI SE BORRA LOS DEMAS PROCESOS JS NO FUNCIONAN -->
                                    <div class="card-body border-bottom border-bottom-dashed p-4" style="display: none !important;">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                
												<div class="profile-user mx-auto  mb-3">
                                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                                                    <label for="profile-img-file-input" class="d-block" tabindex="0">
                                                        <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 60px; width: 256px;">
                                                            <img src="assets/images/logo-dark.png" class="card-logo card-logo-dark user-profile-image img-fluid" alt="logo dark">
                                                            <img src="assets/images/logo-light.png" class="card-logo card-logo-light user-profile-image img-fluid" alt="logo light">
                                                        </span>
                                                    </label>
                                                </div>
												
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
									<!-- CARGA IMAGEN DE LOGOTIPO | SI SE BORRA LOS DEMAS PROCESOS JS NO FUNCIONAN -->
									
                                    <div class="card-body p-4">
                                        <div class="row g-3">
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="txtDocumento">Documento No.</label>
                                                <input type="text" class="form-control bg-light border-0" id="txtDocumento" placeholder="Documento No." value=""/>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label for="date-field">Fecha del documento</label>
                                                    <input type="text" class="form-control bg-light border-0" id="date-field" data-provider="flatpickr" data-time="true" placeholder="Seleccione una fecha">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label for="date-field">Proveedor</label>
                                                    <input id="txtProveedor" name="txtProveedor" type="text" class="form-control bg-light border-0"  placeholder="Seleccione un proveedor" readonly/>
													<input id="hdProveedor" name="hdProveedor" type="hidden" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label for="totalamountInput">Valor Total</label>
                                                    <input type="text" class="form-control bg-light border-0" id="totalamountInput" placeholder="$0.00" readonly />
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
										
										<div class="row g-3">
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label for="txtFormaPago">Froma de Pago</label>
                                                    <input id="txtFormaPago" name="txtFormaPago" type="text" class="form-control bg-light border-0"  placeholder="Forma de pago" readonly/>
													<input id="hdfFormaPago" name="hdProveedor" type="hidden" />
                                                </div>
                                            </div>
											
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label for="txtPais">Pais</label>
                                                    <input id="txtPais" name="txtPais" type="text" class="form-control bg-light border-0"  placeholder="Forma de pago" readonly/>
                                                </div>
                                            </div>
										</div>
                                    </div>
                                    
                                    <div class="card-body p-4">
                                        <div class="table-responsive">
                                            <table id="productos" class="invoice-table table table-borderless table-nowrap mb-0">
                                                <thead class="align-middle">
                                                    <tr class="table-active">
                                                        <th scope="col" style="width: 50px;">#</th>
                                                        <th scope="col">
                                                            Product Details
                                                        </th>
                                                        <th scope="col" style="width: 120px;">
                                                            <div class="d-flex currency-select input-light align-items-center">
                                                                Rate
                                                                <select class="form-selectborder-0 bg-light" data-choices data-choices-search-false id="choices-payment-currency" onchange="otherPayment()">
                                                                    <option value="$">($)</option>
                                                                    <option value="£">(£)</option>
                                                                    <option value="₹">(₹)</option>
                                                                    <option value="€">(€)</option>
                                                                </select>
                                                            </div>
                                                        </th>
                                                        <th scope="col" style="width: 120px;">Quantity</th>
                                                        <th scope="col" class="text-end" style="width: 150px;">Amount</th>
                                                        <th scope="col" class="text-end" style="width: 105px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="newlink">
                                                    <tr id="1" class="product">
                                                        <th scope="row" class="product-id">1</th>
                                                        <td class="text-start">
                                                            <div class="mb-2">
                                                                <input type="text" class="form-control bg-light border-0" id="productName-1" placeholder="Product Name" required />
                                                                <div class="invalid-feedback">
                                                                    Please enter a product name
                                                                </div>
                                                            </div>
                                                            <textarea class="form-control bg-light border-0" id="productDetails-1" rows="2" placeholder="Product Details"></textarea>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control product-price bg-light border-0" id="productRate-1" step="0.01" placeholder="0.00" required />
                                                            <div class="invalid-feedback">
                                                                Please enter a rate
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-step">
                                                                <button type="button" class='minus'>–</button>
                                                                <input type="number" class="product-quantity" id="product-qty-1" value="0" readonly>
                                                                <button type="button" class='plus'>+</button>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <div>
                                                                <input type="text" class="form-control bg-light border-0 product-line-price" id="productPrice-1" placeholder="$0.00" readonly />
                                                            </div>
                                                        </td>
                                                        <td class="product-removal">
                                                            <a href="javascript:void(0)" class="btn btn-success">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="newForm" style="display: none;"><td class="d-none" colspan="5"><p>Add New Form</p></td></tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <a id="add-Producto" class="btn btn-soft-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Nuevo Producto</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-top border-top-dashed mt-2">
                                                        <td colspan="3"></td>
                                                        <td colspan="2" class="p-0">
                                                            <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Sub Total</th>
                                                                        <td style="width:150px;">
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-subtotal" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Estimated Tax (15%)</th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-tax" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Discount <small class="text-muted">(VELZON15)</small></th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-discount" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Shipping Charge</th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-shipping" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="border-top border-top-dashed">
                                                                        <th scope="row">Total Amount</th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-total" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end table-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </div>
										
                                        <div class="row mt-3">
                                            <div class="col-lg-4">
                                                <div class="mb-2">
                                                    <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">Payment Details</label>
                                                    <div class="input-light">
                                                        <select class="form-control bg-light border-0" data-choices data-choices-search-false data-choices-removeItem id="choices-payment-type">
                                                            <option value="">Payment Method</option>
                                                            <option value="Mastercard">Mastercard</option>
                                                            <option value="Credit Card">Credit Card</option>
                                                            <option value="Visa">Visa</option>
                                                            <option value="Paypal">Paypal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-control bg-light border-0" type="text" id="cardholderName" placeholder="Card Holder Name">
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-control bg-light border-0" type="text" id="cardNumber" placeholder="xxxx xxxx xxxx xxxx">
                                                </div>
                                                <div>
                                                    <input class="form-control  bg-light border-0" type="text" id="amountTotalPay" placeholder="$0.00" readonly />
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
										
                                        <div class="mt-4">
                                            <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">NOTES</label>
                                            <textarea class="form-control alert alert-info" id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required>All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</textarea>
                                        </div>
										
                                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                            <button type="submit" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Save</button>
                                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                                            <a href="javascript:void(0);" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Send Invoice</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
							
							<?php include_once("proveedores.php"); ?>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
			
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © J.I.P
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Dise�ado & Desarrollado por J.I.P
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <?php MainJs($data); ?>
	
   <!-- <script>
        $(document).ready(function () {
            $("#txtpbuscar").keyup(function () {
                _this = this;
                // Show only matching TR, hide rest of them
                $.each($("#proveedorTable tbody tr"), function () {
                    if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                        $(this).hide();
                    else
                        $(this).show();
                });
            });
			
            $("#txtProveedor").click(function () {
                show_popup();
            });
			
            $(".close").click(function () {
                close_popup();
            });
			
			productos();
			
			Load_Proveedores();
        });
		
        function Load_Proveedores()
        {
            /* ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */
            var formData = new FormData();
            formData.append('type', "view_proveedores");

            $.ajax({
                url: "https://jip.grupopaniagua.com/Config/services.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                //beforeSend: function (){alert("Iniciando");},
				
                success: function(datos)
                {	
                    var obj = JSON.parse(datos);

                    if (obj.state == "success")
                    {
                        $("#tblProveedores").html(obj.estructura);
                    }
                    else
                    {
                        alert("Ocurri� un error inesperado.");
                    }

                },

                error: function (datos)
                {
                    alert('Se produjo un error: ' + datos.responseText);
                }

                //,complete : function(xhr, status){alert("Terinado");}
            });
            /* ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */
        }
		
        function show_popup() 
		{
            $("#frmProveedor").show(300);
            $("#frmCompras").hide(300);
        }

        function close_popup() 
		{
            $("#frmProveedor").hide(300);
            $("#frmCompras").show(300);
        }
		
		function selectProveedor(row)
		{
			var codigo = $(row).find("td").eq(0).html();
			var nombre = $(row).find("td").eq(1).html();
			var pais = $(row).find("td").eq(4).html();
			var FormaPago = $(row).find("td").eq(4).html();
			
			$("#hdProveedor").val(codigo);
			$("#txtProveedor").val(nombre);
			$("#txtPais").val(pais);
			$("#txtFormaPago").val(FormaPago);
			
			close_popup();
		}
		
        function productos()
		{ 
           var tbody = $('#productos #newlink'); 
           var fila_contenido = tbody.find('tr').first().html();
			
           //Agregar fila nueva. 
           $('#add-Producto').click(function(){ 
              var fila_nueva = $('<tr></tr>');
              fila_nueva.append(fila_contenido); 
              tbody.append(fila_nueva); 
           });
        }
    </script>
</body>

</html>
