<div class="app-content">
        <div class="title-form">
          <h1>THÔNG TIN CÁ NHÂN</h1>
        </div>
        <form class="student-form" action="?act=info&xuli=update" method="post">
         
          <div class="field-form">
            <input type="text" name="firstname" class="first-name" placeholder="First name" required value="<?= $data['name'] ?>"disabled="true">
          </div>
          
          <div class="field-form">
          <input type="text" name="GioiTinh" class="first-name" placeholder="First name" required value="<?= $data['user_sex'] ?>" disabled="true">		
          </div>
         
          <div class="field-form ">
            <input type="text" name="mail" class="department" placeholder="Email" required value="<?= $data['user_email'] ?>"disabled="true">
            </div>
          <div class="field-form dep">
            <input type="text" name="SDT" class="department" placeholder="Phone" required pattern="[0-9]+" minlength="10" value="<?= $data['user_tel'] ?>"disabled="true" >
          </div>
          <div class="field-form">
            <input type="text" name="course" class="course" placeholder="Adress" required value="<?= $data['user_address'] ?>"disabled="true">
          </div> 
         
       
        </form>
      </div>