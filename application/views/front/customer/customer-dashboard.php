<section class="about">
  <div class="container">
    <div class="row">
      <?php $this->load->view('front/customer/side-nav'); ?>
      <div class="col-sm-10">
        <table id="example1" class="table">
          <thead class="bg-1 ">
            <tr>
              <th width="20%">Attributes</th>
              <th>Values</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td><b>First Name</b></td> 
              <td><?php echo $customerData->customer_first_name?></td>
            </tr> 

            <tr>
              <td><b>Last Name</b></td> 
              <td><?php echo $customerData->customer_last_name?></td>
            </tr>  

            <tr>
              <td><b>Email</b></td> 
              <td><?php echo $customerData->customer_email?></td>
            </tr> 

            <tr>
              <td><b>Phone Number</b></td> 
              <td><?php echo $customerData->customer_phone_number?></td>
            </tr> 

            <tr>
              <td><b>Address</b></td> 
              <td><?php echo $customerData->customer_address?></td>
            </tr> 


          </tbody>
        </table>

      </div>
    </div>
  </div>
</section>






