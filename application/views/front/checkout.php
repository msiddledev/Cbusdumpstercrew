
<section class="py-5 checkout products">
  <div class="container">
    <div class="row flex-column-reverse flex-lg-row">
      <div class="col-lg-7 mt-3">
        <div class="checkout p-3">                 
          <form action="<?php echo base_url('proceed-checkout');?>" method="post" class="needs-validation">
            <div class="row">
              <div class="col-md-6 mb-4">
                <label for="firstName">First name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstName" placeholder="First Name" required="" name="first_name" value="<?php echo (!empty($customerdata->customer_first_name)?$customerdata->customer_first_name:''); ?>" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <label for="lastName">Last name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="lastName" placeholder=" Last Name" name="last_name" value="<?php echo (!empty($customerdata->customer_last_name)?$customerdata->customer_last_name:''); ?>" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label for="email">Email  <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email" value="<?php echo (!empty($customerdata->customer_email)?$customerdata->customer_email:''); ?>" required="" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="mb-4">
             <label for="country">Country <span class="text-danger">*</span></label>
             <select name="country" class="form-control custom-select d-block w-100" id="country" required="">
              <option value="Please Select">Please Select</option>
              <option value="Pakistan">Pakistan</option>
              <?php foreach($this->countries as $country):?>
                <option value="<?php echo  $country->id;?>"><?php echo  $country->name; ?></option>
              <?php endforeach; ?>  
            </select>
          </div>
          <div class="mb-4">
            <label for="address">Street address <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?php echo (!empty($customerdata->customer_address)?$customerdata->customer_address:''); ?>" name="address" placeholder="Home number and street address" required="">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
          <div class="mb-4">
            <label for="zip">Postcode/Zip <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?php echo (!empty($customerdata->zip_code)?$customerdata->zip_code:''); ?>" name="zip" id="address2" required="" placeholder="zip Code">
          </div>
          <div class="mb-4">
            <label for="town-city">Town & City <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?php echo (!empty($customerdata->customer_city)?$customerdata->customer_city:''); ?>" name="city" id="address2" required="" placeholder="City">
          </div>
          <div class="mb-4">
            <label for="lastName">Phone Number <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo (!empty($customerdata->customer_phone_number)?$customerdata->customer_phone_number:''); ?>" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your number is required.
            </div>
          </div>    

          <input type="hidden" id="cod_check_yes" name="cod_check" value="">

          <button id="placeOrder" class="w-100" type="submit">Place Order</button>
        </form> 
      </div>
    </div>

    <div class="col-lg-5 mt-3 p-0 align-self-start">
      <div class="cart p-5 checkout-side">
        <div class="row border-bottom">
          <div class="col-8 pb-3">
            <h6>Order Summary</h6>
          </div>

          <div class="col-4  pb-3 text-right align-self-center">
            <a href="<?php echo base_url('cart')?>" class="text-center">View Details</a>
          </div>
          <?php if(!empty($this->cart->contents())): foreach($this->cart->contents() as $content): ?>
            <div class="row cart-item p-4 m-0 border-top">                  
              <div class="col-md-3 col-5">
                <a href="<?php echo base_url('product-details/').get_slug_by_id('product',$content['id']);?>" tabindex="-1">
                  <img class="lazy loaded w-100" style="max-height:150px;" src="<?php echo base_url('uploads/product/').$content['image']?>" data-src="<?php echo base_url('uploads/product/').$content['image']?>" data-was-processed="true"></a>
                </div>
                <div class="col-md-6 col-7 align-self-center">
                  <h6 class="fw-300"><?php echo $content['name'];  ?></h6>
                  <h6 class="fw-300">Quantity:<?php echo $content['qty'];  ?></h6>
                  <?php if(!empty($content['options']['color'])):?>
                    <p class="m-0">Color: <?php echo get_name_by_id('product_color',$content['options']['color']);  ?></p>
                  <?php endif; ?>
                  <p class="m-0">Size: <?php echo ($content['options']['size'] == 0)? "Custom Size Defined":get_name_by_id('product_size',$content['options']['size']); ?></p>
                  <?php if(!empty($content['options']['custom_size'])): ?>
                    <hr>
                    <br><b>Custom Size</b>:<br> <?php echo $content['options']['custom_size']; ?>
                  <?php endif; ?>             
                </div>
                <div class="col-md-3 offset-5 offset-md-0">
                  <div class="align-self-center"><strong>PRICE</strong><p> <?php echo $this->currency; ?> <?php echo round($content['price'],2);  ?></p></div>
                </div>              
              </div>
            <?php endforeach; endif; ?>
                    <!-- <div class="col-8 py-3 pb-5">
                      <p class="mb-0">Delivery Charges (Standard)</p>
                    </div> -->
                    <!-- 
                    <div class="col-4 py-3 pb-5 text-right align-self-center">
                      <p class="mb-0"><?php //echo $this->currency.'';?><?php //echo round($total_price,2);?></p>
                    </div> -->
                  </div>
                  <div class="row pt-4">
                    <div class="col-7">
                      <h6 class="mb-0">Grand Total</h6>
                    </div>
                    <div class="col-5 text-right align-self-center">
                      <h6 class="clr-1 mb-0"><?php echo $this->currency; ?> <?php echo get_grand_total(); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>