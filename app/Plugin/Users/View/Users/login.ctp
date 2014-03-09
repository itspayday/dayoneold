<!--Wrapper main-content Block Start Here-->
<?php 
 
echo $this->element("breadcrame",array('breadcrumbs'=>
	array('Sign In'=>'Sign In'))
	);
	?>
<div id="main-content">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <h2 class="page-title">Botangle Sign In</h2>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span9 PageLeft-Block">
        <p class="FontStyle20">Already a Botangle member?</p>
        <p>Please enter your botangle Username /Password to access the botangle account.</p>
        <div class="Signup">
         <?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'),'class'=>'form-inline form-horizontal'));?>

         
          <div class="form-group span5" style="margin-left:0px;">
            <label class="sr-only" for="Username2">Username</label>
			<?php
			echo $this->Form->input('username', array('class'=>'form-control textbox1','placeholder'=>'Username','label'=>false ));
			?>
            
          </div>
          <div class="form-group span5">
            <label class="sr-only" for="Password2">Password</label>
           <?php
			echo $this->Form->input('password', array('class'=>'form-control textbox1','placeholder'=>'Password','label'=>false));
			?>
          </div>
         <div class="span2">
           <button type="submit" class="btn btn-primary">Login</button>
       </div>
       <div class="checkbox span12 mar0">
            <label>
              <input type="checkbox"><label>Remember me</label>
            </label>
      </div>
      <div class="span12 mar0">
	  <?php
	  echo $this->Html->link(__("Did you forgot your username /password?"), array('action'=> 'forgot'))
	  ?>
	  
       </div>
        <?php echo $this->Form->end();?>
 

          
        </div>
      </div>
      <div class="span3 PageRight-Block">
       <p class="FontStyle20">Not a member? Sign Up here</p>
        <p>Get a Free Account for 7 days. Sign Up here.</p><br>
<br>
<?php 
echo $this->Html->link(__("Sign Up"), array('action'=> 'registration','tutor'), array( 'class' => 'btn btn-primary'))
/*
<button type="submit" class="btn btn-primary">Sign Up</button> */
?>
 
      </div>
    </div>
    <!-- @end .row --> 
    
    <div class="row-fluid ">
      <div class="Get-in-Touch offset6">
      <p class="FontStyle20"><strong>Get in touch with us:</strong></p>
      </div>
      
      </div>
    <div class="row-fluid ">
      <div class="Social-Boxs Social-Email span3">     
      <p class="FontStyle20"><a href="#"> Email Us</a></p>
      </div>
      
     <div class="Social-Boxs Social-FB span3">      
      <p class="FontStyle20"><a href="#"> Facebook Us</a></p>
      </div>
      
       <div class="Social-Boxs Social-Tweet span3">      
      <p class="FontStyle20"><a href="#"> Follow Us</a></p>
      </div>
      
       <div class="Social-Boxs Social-Linkedin span3">   
      <p class="FontStyle20"><a href="#"> LinkedIn</a></p>
      </div>
      
      </div> 
    
    
    
  </div>
  <!-- @end .container --> 
</div>
<!--Wrapper main-content Block End Here--> 