<div class="checkout-right">
    <h4>Your shopping cart contains:
        <span>{{ count($carts) }} book</span>
    </h4>
    <div class="delete_cart_url" data-url="{{ route('carts.delete-cart') }}">
        <table class="timetable_sub table-responsive update_cart_url" data-url="{{ route('carts.update-cart') }}">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hinh anh</th>
                    <th>Ten</th>
                    <th>Gia</th>
                    <th>So luong</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt = 1;
                    $total = 0;
                @endphp
                @forelse ($carts as $id => $cart)
                    @php
                        $total += $cart['price'] * $cart['quantity'];
                    @endphp
                    <tr class="rem1">
                        <td class="invert">{{ $stt++ }}</td>
                        <td class="invert-image">
                            <a href="single_product.html">
                                <img src="{{ asset('storage/' . $cart['image']) }}" alt=" "
                                    style="height: 200px;width:150px" class="img-responsive">
                            </a>
                        </td>
                        <td class="invert">{{ $cart['name'] }}</td>
                        <td class="invert">{{ number_format($cart['price']) }} VND</td>
                        <td class="invert">
                            {{-- <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value">
                                    <span>{{ $cart['quantity'] }}</span>
                                </div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div> --}}
                            <input type="number" value="{{ $cart['quantity'] }}" min="1" class="quantity">
                        </td>
                        <td class="invert">{{ number_format($cart['price'] * $cart['quantity']) }} VND
                        </td>

                        {{-- <td class="invert">Be Creative</td>

            <td class="invert">$100.00</td>
            <td class="invert">
                <div class="rem">
                    <div class="close1"> </div>
                </div>

            </td> --}}
                        <td>
                            <a class="btn btn-warning cart_update" data-id="{{ $id }}" href="">Cap nhap</a>
                            <a class="btn btn-danger cart_delete" data-id="{{ $id }}" href="">Xoa</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7">No data</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <div class="checkout-left">
        <div class="col-md-4 checkout-left-basket">
            <h4>Continue to basket</h4>
            <ul>
                {{-- <li>Be Creative
                <i>-</i>
                <span>$100.00 </span>
            </li>
            <li>Work From Home
                <i>-</i>
                <span>$80.00 </span>
            </li>
            <li>E-Commerce
                <i>-</i>
                <span>$120.00 </span>
            </li>
            <li>Total Service Charges
                <i>-</i>
                <span>$55.00</span>
            </li> --}}
                <li>Total
                    <i>-</i>
                    <span>{{ number_format($total) }} VND</span>
                </li>
            </ul>
        </div>
        <div class="col-md-8 address_form">
            <h4>Billing Address</h4>
            <form action="payment.html" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                <div class="creditly-wrapper wrapper">
                    <div class="information-wrapper">
                        <div class="first-row form-group">
                            <div class="controls">
                                <label class="control-label">Full name: </label>
                                <input class="billing-address-name form-control" type="text" name="name"
                                    placeholder="Full name">
                            </div>
                            <div class="card_number_grids">
                                <div class="card_number_grid_left">
                                    <div class="controls">
                                        <label class="control-label">Mobile number:</label>
                                        <input class="form-control" type="text" placeholder="Mobile number">
                                    </div>
                                </div>
                                <div class="card_number_grid_right">
                                    <div class="controls">
                                        <label class="control-label">Landmark: </label>
                                        <input class="form-control" type="text" placeholder="Landmark">
                                    </div>
                                </div>
                                <div class="clear"> </div>
                            </div>
                            <div class="controls">
                                <label class="control-label">Town/City: </label>
                                <input class="form-control" type="text" placeholder="Town/City">
                            </div>
                            <div class="controls">
                                <label class="control-label">Address type: </label>
                                <select class="form-control option-fieldf">
                                    <option>Office</option>
                                    <option>Home</option>
                                    <option>Commercial</option>

                                </select>
                            </div>
                        </div>
                        <button class="submit check_out">place order</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="clearfix"> </div>

    </div>
