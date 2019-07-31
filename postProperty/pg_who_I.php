<?php include 'propertymenubar.html'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
</div>
<div class="row" >
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
   
        <!-- Text property heading -->
        <center><div class="mb-tb-5per">
                    <label class="txtbox-property-heading back-color-blue white-font ">I AM</label>
                </div>
        </center>
        <!-- Types og property -->
        <div class="row ">
            <div class="col-md-4 mb-tb-3per">
              <input type="radio" name="pg-owner" value="pg-owner"><span class="select-txt">Owner</span>
            </div>
            <div class="col-md-4 center mb-tb-3per">
              <input type="radio" name="pg-agent" value="pg-agent"><span class="select-txt">Agent / Broker</span>
            </div>
            <div class="col-md-4 center mb-tb-3per">
              <input type="radio" name="pg-builder" value="pg-builder"><span class="select-txt">Builder</span>
            </div>
        </div>
      
    </div> <!--box close-->
    <style>
      .b {
        display:none;
      }
      @media screen and (max-width: 768px) {
      .a {
       display:none;
      }
      .b {
        display:block;
      }
      a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
    }
      </style>
    <div class="width-eighty m-auto">
        <center>
          <button class="btn-property back-color-yellow red-font">Save & Continue</button>
        </center>
    </div>
</div>
</div>
