<?php include 'propertymenubar.html'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="./pg_amenities.php#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
</div>


<form id="form" method="post"  enctype="multipart/form-data">
    <input type="text" name="first" value="Bob" />
    <input type="text" name="middle" value="James" />
    <input type="text" name="last" value="Smith" />
    <input name="image" type="file" />
    <input name="image" type="file" />

    <button type='button' id='submit_btn'>Submit</button>
</form>

<script>
        $('#submit_btn').click(function(e) {
     //Prevent Instant Click  
    e.preventDefault();
    // Create an FormData object 
        var formData =$("#form").submit(function(e){
            return ;
        });
        // formData.append('photos[]', "file", "aaa");

      //formData[0] contain form data only 
      // You can directly make object via using form id but it require all ajax operation inside $("form").submit(<!-- Ajax Here   -->)
        var formData1 = new FormData(formData[0]);    
        formData1.append("username", "Groucho");
        console.log("form data.............", formData1);
        $.ajax({
            url: "http://localhost:3000/upload?type=pro",
            type: 'POST',
            data: formData1,
            success: function(response) {console.log(response);},
            contentType: false,
            processData: false,
            cache: false
        });
        return false;
            });
</script>