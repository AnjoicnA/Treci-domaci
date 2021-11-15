<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izmjena korisnika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="./update_user.php" method="POST">
          <div class="row">
              <div class="col-12">
                  <input type="text" name="id" id="id" class="form-control" placeholder="ID" hidden>
              </div>
              <div class="col-12">
                  <input type="text" name="first_name" id="editModalFirstName" class="form-control" placeholder="Unesite ime">
              </div>
              <div class="col-12 mt-3">
                  <input type="text" name="last_name" id="editModalLastName" class="form-control" placeholder="Unesite prezime">
              </div>
              <div class="col-12 mt-3">
              <?php
                  $countries = getDataFromFile("./countries.txt");
                  
                    echo "<select class=\"form-select\" name=\"country\" id=\"editUserCountry\" onclick=\"filterCities(this.value, 1)\">";
                    echo "<option value=null selected disabled hidden>Država</option>";
                    foreach($countries as $country){
                      echo "<option value=\"".$country["name"]."\">".$country["name"]."</option>";
                    };
                    echo "</select>";
              ?>
              </div>
              <div class="col-12 mt-3">
              <?php
                  $cities = getDataFromFile("./cities.txt");
                  
                    echo "<select class=\"form-select city\" name=\"city\" id=\"editUserCity\">";
                    echo "<option value=null selected disabled hidden>Grad</option>";
                    // foreach($cities as $city){
                    //   echo "<option value=\"".$city["name"]."\">".$city["name"]."</option>";
                    // };
                    echo "</select>";
              ?>
              <div class="col-12 mt-3">
                  <input type="email" name="email" id="editModalEmail" class="form-control" placeholder="Unesite e-mail adresu">
              </div>
          </div>

          <div class="row mt-3">
              <div class="col-4 offset-4">
                  <button class="btn btn-success w-100">Izmijeni korisnika</button>
              </div>
          </div>
      </form>

      </div>
    </div>
  </div>
</div>