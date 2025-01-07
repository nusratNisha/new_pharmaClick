@extends('layouts.empty', ['paceTop' => true])

@section('title', 'POS - Customer Order System')

@section('content')
    <!-- BEGIN pos -->
    <div class="pos pos-customer" id="pos-customer">
        <!-- BEGIN pos-menu -->
        <div class="pos-menu">
            <div class="logo">
                <a href="index_v3.html">
                    <div class="logo-img"><img src="/images/healthCareLogo.png" /></div>
                    <div class="logo-text">Welcome to pharmacy </div>
                </a>
            </div>
            <div class="nav-container">
                <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-filter="all">
                                <i class="fa fa-fw fa-pills mr-1 ml-n2"></i> All medicines
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-filter="vitamins">
                                <i class="fa fa-fw fa-pills mr-1 ml-n2"></i> Vitamins
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-filter="medical-accessories">
                                <i class="fa fa-fw fa-stethoscope mr-1 ml-n2"></i> Medical Accessories
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END pos-menu -->

        <!-- BEGIN pos-content -->
        <div class="pos-content">
            <div class="pos-content-container" data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                <div class="product-row">
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem"
                            data-title="Paracetamol 500 mg"
                            data-desc="Effective for fever and mild to moderate pain"
                            data-price="RM5.99"
                            data-img="/images/med1.jpeg">
                            <div class="img" style="background-image: url(/images/med1.jpeg)"></div>
                            <div class="text">
                                <div class="title">Paracetamol 500 mg</div>
                                <div class="desc">Effective for fever and mild to moderate pain</div>
                                <div class="price">RM5.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem"
                           data-title="Paracetamol 500 mg"
                           data-desc="Effective for fever and mild to moderate pain"
                           data-price="RM5.99"
                           data-img="/images/med1.jpeg">
                            <div class="img" style="background-image: url(/images/med2.jpg)"></div>
                            <div class="text">
                                <div class="title">Antacid</div>
                                <div class="desc">Neutralize stomach acid to relieve heartburn and indigestion</div>
                                <div class="price">RM 6.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med3.webp)"></div>
                            <div class="text">
                                <div class="title">Antihistamines</div>
                                <div class="desc">Alleviate allergy symptoms like sneezing, runny nose, and itchy eyes</div>
                                <div class="price">RM11.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med4.avif)"></div>
                            <div class="text">
                                <div class="title">Corcidin</div>
                                <div class="desc">Relieve symptoms of coughs and colds, such as sore throat, congestion, and runny nose</div>
                                <div class="price">RM6.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med5.webp)"></div>
                            <div class="text">
                                <div class="title">Laxatives</div>
                                <div class="desc">Relieve constipation</div>
                                <div class="price">RM6.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med6.webp)"></div>
                            <div class="text">
                                <div class="title">Vitamin D</div>
                                <div class="desc">Important for bone health, immune function, and mood regulation. Many people, especially those with limited sun exposure, are deficient in vitamin D.</div>
                                <div class="price">RM36.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med7.webp)"></div>
                            <div class="text">
                                <div class="title">Antiseptic creams and ointment</div>
                                <div class="desc">Help prevent infection in minor cuts and scrapes</div>
                                <div class="price">RM16.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med8.jpg)"></div>
                            <div class="text">
                                <div class="title">Nasal sprays</div>
                                <div class="desc">Relieve nasal congestion due to colds, allergies, or sinus infections</div>
                                <div class="price">RM10.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med10.webp)"></div>
                            <div class="text">
                                <div class="title">Oral rehydration solutions (ORS)</div>
                                <div class="desc">Replace fluids and electrolytes lost due to diarrhea and vomiting</div>
                                <div class="price">RM7.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med11.webp)"></div>
                            <div class="text">
                                <div class="title">Omega-3 fatty acids</div>
                                <div class="desc">Found in fish oil, these fatty acids support heart health, brain function, and reduce inflammation</div>
                                <div class="price">RM40.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med12.avif)"></div>
                            <div class="text">
                                <div class="title">Vitamin C</div>
                                <div class="desc">A powerful antioxidant that supports immune function and collagen production</div>
                                <div class="price">RM6.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med13.webp)"></div>
                            <div class="text">
                                <div class="title">Probiotics</div>
                                <div class="desc">These beneficial bacteria support gut health and digestion</div>
                                <div class="price">RM6.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med14.jpg)"></div>
                            <div class="text">
                                <div class="title">Vitamins B-12</div>
                                <div class="desc">Essential for nerve function, energy production, and red blood cell formation</div>
                                <div class="price">RM6.99</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-container" data-type="medicine">
                        <a href="#" class="product" data-toggle="modal" data-target="#modalPosItem">
                            <div class="img" style="background-image: url(/images/med15.jpg)"></div>
                            <div class="text">
                                <div class="title">Multivitamins</div>
                                <div class="desc">These provide a range of essential vitamins and minerals to ensure you're getting adequate amounts</div>
                                <div class="price">RM6.99</div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
        <!-- END pos-content -->

        <!-- BEGIN pos-sidebar -->
            <div class="pos-sidebar" id="pos-sidebar">
                <div class="pos-sidebar-header">
                    <div class="back-btn">
                        <button type="button" data-dismiss-class="pos-mobile-sidebar-toggled" data-target="#pos-customer" class="btn">
                            <svg viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="icon"><img src="/assets/img/pos/icon-table.svg" /></div>
                    <div class="title">Table 01</div>
                    <div class="order">Order: <b>#0056</b></div>
                </div>
                <div class="pos-sidebar-nav">
                    <ul class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-toggle="tab" data-target="#newOrderTab">New Order (5)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="tab" data-target="#orderHistoryTab">Order History (0)</a>
                        </li>
                    </ul>
                </div>
                <div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%">
                    <div class="tab-pane fade h-100 show active" id="newOrderTab">
                        <div class="pos-table">
                            <div class="row pos-table-row">
                                <div class="col-9">
                                    <div class="pos-product-thumb">
                                        <div class="img" style="background-image: url(/images/med1.jpeg)"></div>
                                        <div class="info">
                                            <div class="title">Paracetamol 500 mg</div>
                                            <div class="single-price">RM5.99</div>
                                            <div class="desc">Effective for fever and mild to moderate pain</div>
                                            <div class="input-group qty">
                                                <div class="input-group-append">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
                                                </div>
                                                <input type="text" class="form-control" value="01" />
                                                <div class="input-group-prepend">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 total-price">RM5.99</div>
                            </div>
                            <div class="row pos-table-row">
                                <div class="col-9">
                                    <div class="pos-product-thumb">
                                        <div class="img" style="background-image: url(/images/med2.jpg)"></div>
                                        <div class="info">
                                            <div class="title">Antacid</div>
                                            <div class="single-price">RM6.99</div>
                                            <div class="desc">Neutralize stomach acid to relieve heartburn and indigestion</div>
                                            <div class="input-group qty">
                                                <div class="input-group-append">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
                                                </div>
                                                <input type="text" class="form-control" value="01" />
                                                <div class="input-group-prepend">
                                                    <a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 total-price">RM6.99</div>
                            </div>
                            <!-- Add more medicine items here as needed -->
                        </div>
                    </div>
                    <div class="tab-pane fade h-100" id="orderHistoryTab">
                        <div class="h-100 d-flex align-items-center justify-content-center text-center p-20">
                            <div>
                                <div class="mb-3 mt-n5">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                                        <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
                                    </svg>
                                </div>
                                <h4>No order history found</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pos-sidebar-footer">
                    <div class="subtotal">
                        <div class="text">Subtotal</div>
                        <div class="price">RM12.98</div>
                    </div>
                    <div class="taxes">
                        <div class="text">Taxes (6%)</div>
                        <div class="price">RM0.78</div>
                    </div>
                    <div class="total">
                        <div class="text">Total</div>
                        <div class="price">RM13.76</div>
                    </div>
                    <div class="btn-row">
                        <a href="#" class="btn btn-default"><i class="fa fa-bell fa-fw fa-lg"></i> Service</a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-invoice-dollar fa-fw fa-lg"></i> Bill</a>
                        <a href="#" class="btn btn-success"><i class="fa fa-check fa-fw fa-lg"></i> Submit Order</a>
                    </div>
                </div>
            </div>
        <!-- END pos-sidebar -->
    </div>
    <!-- END pos -->

    <!-- BEGIN pos-mobile-sidebar-toggler -->
        <a href="#" class="pos-mobile-sidebar-toggler" data-toggle-class="pos-mobile-sidebar-toggled" data-target="#pos-customer">
            <svg viewBox="0 0 16 16" class="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
            </svg>
            <span class="badge">5</span>
        </a>
    <!-- END pos-mobile-sidebar-toggler -->


    <!-- BEGIN #modalPosItem -->
        <div class="modal modal-pos-item fade" id="modalPosItem">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <a href="#" data-dismiss="modal" class="close"><i class="fa fa-times"></i></a>
                        <div class="pos-product">
                            <div class="pos-product-img">
                                <div class="img" style="background-image: url(/images/med1.jpeg)"></div>
                            </div>
                            <div class="pos-product-info">
                                <div class="title">Paracetamol 500 mg</div>
                                <div class="desc">Effective for fever and mild to moderate pain</div>
                                <div class="price">RM5.99</div>
                                <hr />
                                <div class="option-row">
                                    <div class="qty">
                                        <div class="input-group">
                                            <a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
                                            <input type="text" class="form-control border-0 text-center" name="" value="1" />
                                            <a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="option-row">
                                    <div class="option-title">Size</div>
                                    <div class="option-list">
                                        <div class="option">
                                            <input type="radio" id="size3" name="size" class="option-input" checked />
                                            <label class="option-label" for="size3">
                                                <span class="option-text">Single</span>
                                                <span class="option-price">+5.99</span>
                                            </label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" id="size1" name="size" class="option-input" />
                                            <label class="option-label" for="size1">
                                                <span class="option-text">3+1 Free</span>
                                                <span class="option-price">+15.00</span>
                                            </label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" id="size2" name="size" class="option-input" />
                                            <label class="option-label" for="size2">
                                                <span class="option-text">4+1 Free</span>
                                                <span class="option-price">+20.50</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="btn-row">
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                    <a href="#" class="btn btn-success">Add to cart <i class="fa fa-plus fa-fw ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END #modalPosItem -->
@endsection

@push('scripts')
    <script src="/assets/js/demo/pos-customer-order.demo.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    $('#modalPosItem').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget); // Button that triggered the modal
                        var title = button.data('title');
                        var desc = button.data('desc');
                        var price = button.data('price');
                        var img = button.data('img');

                        var modal = $(this);
                        modal.find('.pos-product-img .img').css('background-image', 'url(' + img + ')');
                        modal.find('.pos-product-info .title').text(title);
                        modal.find('.pos-product-info .desc').text(desc);
                        modal.find('.pos-product-info .price').text(price);
                    });
                });
            </script>
@endpush
