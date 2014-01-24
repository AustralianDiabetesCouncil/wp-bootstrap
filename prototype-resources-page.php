<?php 
/* Template Name: Resources Page */
get_header(); ?>


<div class="container page-head">
  <h1> Resources </h1>



</div>


<div class="container">


<ul id="myTab" class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Recent</a></li>
  <li class=""><a href="#Popular" data-toggle="tab">Popular</a></li>
  <li class=""><a href="#PDF" data-toggle="tab">PDF</a></li>
  <li class=""><a href="#Video" data-toggle="tab">Video</a></li>
  <li class=""><a href="#Audio" data-toggle="tab">Audio</a></li>
</ul>
        </li>
      </ul>
  <div id="Recent" class="tab-content">
    <div class="tab-pane fade active in" id="home">

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Last Updated On</th>
            <th>Type</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><a href="/NDSS-Forms/01Alcohol_2012.aspx" target="_blank">Alcohol and Diabetes</a></td>
            <td>22 / 08 / 14</td>
            <td>PDF</td>
            <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> </button></td>
           </tr>
          
          <tr>
            <td>2</td>
            <td><a href="/NDSS-Forms/02AltSweetner_2012.aspx " target="_blank">Alternative Sweeteners </a></td>
            <td>22 / 08 / 14</td>
            <td>PDF</td>
            <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> </button></td>

          </tr>


        </tbody>
      </table>
    </div>


    <div class="tab-pane fade " id="Popular">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Last Updated On</th>
            <th>Type</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>

        <?php 
          for ($x=1; $x<=12; $x++)
            {
            echo "<tr><td>$x</td>
                   <td><a href=\"/NDSS-Forms/01Alcohol_2012.aspx\" target=\"_blank\">Alcohol and Diabetes</a></td>
                   <td>22 / 08 / 14</td>
                   <td>PDF</td>
                   <td><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-save\"></span> </button></td>
                  </tr>
          ";
            } 
          ?>


        </tbody>
      </table>        </div>
    <div class="tab-pane fade" id="PDF">
         <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Last Updated On</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>
              <a href="/NDSS-Forms/01Alcohol_2012.aspx" target="_blank">
                  Alcohol and Diabetes 
              </a>
            </td>
            <td>22 / 08 / 14</td>
            <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> </button></td>
           </tr>
          
          <tr>
            <td>2</td>
            <td><a href="/NDSS-Forms/02AltSweetner_2012.aspx " target="_blank">Alternative Sweeteners </a></td>
            <td>22 / 08 / 14</td>
            <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> </button></td>

          </tr>


        </tbody>
      </table>
    </div>
    <div class="tab-pane fade" id="Video">
      <p>Hello</p>
    </div>
    <div class="tab-pane fade" id="Audio">
      <p>Mello</p>
    </div>
  </div>





</div>

<script type="text/javascript">
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

<?php get_footer(); ?>