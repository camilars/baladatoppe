<?php include 'header.php';?>

<div><!-- formlário cadastro -->
<div class="form-row mt-4">
    <div class="col-sm-5 pb-3">
        <label for="exampleAccount">Nome</label>
        <input type="text" action="" class="form-control" id="exampleAccount" placeholder="nome">
    </div>
    <div class="col-sm-3 pb-3">
        <label for="exampleCtrl"><i class="fas fa-at"></i>Email</label>
        <input type="email" action="" class="form-control" id="exampleCtrl" placeholder="email">
    </div>
    <div class="col-sm-4 pb-3">
        <label for="exampleAmount">Amount</label>
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
            <input type="text" class="form-control" id="exampleAmount" placeholder="Amount">
        </div>
    </div>
    <div class="col-sm-6 pb-3">
        <label for="exampleFirst">First Name</label>
        <input type="text" class="form-control" id="exampleFirst">
    </div>
    <div class="col-sm-6 pb-3">
        <label for="exampleLast">Last Name</label>
        <input type="text" class="form-control" id="exampleLast">
    </div>
    <div class="col-sm-6 pb-3">
        <label for="exampleCity">City</label>
        <input type="text" class="form-control" id="exampleCity">
    </div>
    <div class="col-sm-3 pb-3">
        <label for="exampleSt">State</label>
        <select class="form-control" id="exampleSt">
            <option>Pick a state</option>
        </select>
    </div>
    <div class="col-sm-3 pb-3">
        <label for="exampleZip">Postal Code</label>
        <input type="text" class="form-control" id="exampleZip">
    </div>
    <div class="col-md-6 pb-3">
        <label for="exampleAccount">Color</label>
        <div class="form-group small">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Blue
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Red
                </label>
            </div>
            <div class="form-check form-check-inline disabled">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled=""> Green
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4"> Yellow
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option5"> Black
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option6"> Orange
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-6 pb-3">
        <label for="exampleMessage">Message</label>
        <textarea class="form-control" id="exampleMessage"></textarea>
        <small class="text-info">
            Add the packaging note here.
        </small>
    </div>
    <div class="col-12">
        <div class="form-row">
            <label class="col-md col-form-label"  for="name">Generated Id</label>
            <input type="text" class="form-control col-md-4" name="gid" id="gid" />
            <label class="col-md col-form-label"  for="name">Date Assigned</label>
            <input type="text" class="form-control col-md-4" name="da" id="da" />
        </div>
    </div>
</div>

</div>

</div>
<!--/row-->

<br><br><br><br>

</div>
<!--/col-->
</div>