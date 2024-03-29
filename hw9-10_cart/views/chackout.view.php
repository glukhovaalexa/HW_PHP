<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form
                group has a validation state that can be triggered by attempting to submit the form without completing
                it.</p>
        </div>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span
                            class="badge badge-secondary badge-pill"><?= (cartProduct()) ? countCartProducts() : '' ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php $totalSum = 0; ?>

                        <?php foreach($products as $key => $product): ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?= $product["info"]->article ?></h6>
                                <input type="hidden" name="oder['productName'][]" value="<?= $product["info"]->article ?>">
                                <small class="text-muted"><?= $product["qty"] ?>qty</small>
                                <input type="hidden" name="oder['productQty'][]" value="<?= $product["qty"] ?>">

                            </div>
                            <span class="text-muted"><?= $product["info"]->price ?> for one</span>
                            <input type="hidden" name="oder['productPrice'][]" value="<?= $product["info"]->price ?>">
                            <span class="text-muted"><?= $sum = ($product["info"]->price) * ($product["qty"]) ?></span>


                        </li>
                        <?php $totalSum += $sum; ?>

                        <?php endforeach ?>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong><?= $totalSum ?></strong>
                            <input type="hidden" name="oder['totalSum'][]" value="<?= $totalSum ?>">
                        </li>
                    </ul>


                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" name="userName" class="form-control" id="firstName" placeholder=""
                                value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" name="userLastname" class="form-control" id="lastName" placeholder=""
                                value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <input type="text" name="userEmail" class="form-control" id="username"
                                placeholder="Username" required="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="userAdress" class="form-control" id="address"
                            placeholder="1234 Main St" required="">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""
                                required="">
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                required="">
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                required="">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <input type="submit" name="submit" value="Chackout" class="btn btn-primary btn-lg btn-block mb-4"
                        type="submit"></input>
                </div>
            </div>
        </form>


</body>