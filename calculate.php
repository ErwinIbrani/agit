<!DOCTYPE html>
<html lang="en">
<head>
<title>Generate</title>
<script type="text/javascript">
function generate() {
  var assign_date                  = (document.getElementById("assign_date").value);
  var priority                     = (document.getElementById("priority").value);
  var rca_status                   = (document.getElementById("rca_status").value);
  var actual_rca_creation_date     = (document.getElementById("actual_rca_creation_date").value);
  //auto RCA
  var rebaseline_rca_creation_date = (document.getElementById("rebaseline_rca_creation_date").value);
  //auto IMP
  var rebaseline_imp_creation_date = (document.getElementById("rebaseline_imp_creation_date").value);
  var date  = new Date(assign_date);

    if(priority == 'P1')
    {
       var w1 = 7;
       var w2 = 28;
       var newdate     = new Date(date); 
       newdate.setDate(newdate.getDate() + w1);
       var dd = newdate.getDate();
       var mm = newdate.getMonth() + 1;
       var y = newdate.getFullYear();
       var rcaCreationDate = y + '-' + mm + '-' + dd;
       var rca_creation_date = document.getElementById('rca_creation_date').value = rcaCreationDate;
      
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var imp_creation_date = document.getElementById('imp_creation_date').value = impCreationDate;
    }
    
    else if(priority == 'P2')
    {
       var w1 = 28;
       var newdate = new Date(date); 
       newdate.setDate(newdate.getDate() + w1);
       var dd = newdate.getDate();
       var mm = newdate.getMonth() + 1;
       var y = newdate.getFullYear();
       var rcaCreationDate = y + '-' + mm + '-' + dd;
       var rca_creation_date = document.getElementById('rca_creation_date').value = rcaCreationDate;
      
       var w2 = 56; 
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var imp_creation_date = document.getElementById('imp_creation_date').value = impCreationDate;
    } 
    
    else if(priority == 'P3')
    {
       var w1 = 42;
       var newdate     = new Date(date); 
       newdate.setDate(newdate.getDate() + w1);
       var dd = newdate.getDate();
       var mm = newdate.getMonth() + 1;
       var y = newdate.getFullYear();
       var rcaCreationDate = y + '-' + mm + '-' + dd;
       var rca_creation_date = document.getElementById('rca_creation_date').value = rcaCreationDate;
       
       var w2 = 84;
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var imp_creation_date = document.getElementById('imp_creation_date').value = impCreationDate;
    }
    
    else if(priority == 'P4')
    {
       var w1 = 56;
       var newdate     = new Date(date); 
       newdate.setDate(newdate.getDate() + w1);
       var dd = newdate.getDate();
       var mm = newdate.getMonth() + 1;
       var y = newdate.getFullYear();
       var rcaCreationDate = y + '-' + mm + '-' + dd;
       var rca_creation_date = document.getElementById('rca_creation_date').value = rcaCreationDate;
       
       var w2 = 112;
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var imp_creation_date = document.getElementById('imp_creation_date').value = impCreationDate;
    }
  
  //RCA  
  var _of_rebaselined_rca_creation_target = (document.getElementById("_of_rebaselined_rca_creation_target").value);
  var date1  = Date.now(); 
  var date2  = Date.parse(rca_creation_date);
  var dates2 = Date.parse(rebaseline_rca_creation_date); 
  
  if(rebaseline_rca_creation_date === ""){  
    if(rca_status != 'Created')
    {
      if(actual_rca_creation_date === "")
      {
         if(date1 > date2)
         {
            if(_of_rebaselined_rca_creation_target < 1)
            {
                var addOneRCA  = _of_rebaselined_rca_creation_target + 1;   
                var convertProcces = new Date(date2);
                convertProcces.setDate(convertProcces.getDate() + w1);
                var dd = convertProcces.getDate();
                var mm = convertProcces.getMonth() + 1;
                var y = convertProcces.getFullYear();
                var conertSucces1 = y + '-' + mm + '-' + dd;
                document.getElementById('rebaseline_rca_creation_date').value = conertSucces1;
                document.getElementById('_of_rebaselined_rca_creation_target').value = addOneRCA;
            }
            else{
               alert("RCA Terdafat Data Salah")
           }
         }
         else{
             alert("RCA Belum Bisa Dilakukkan Pada Saat Ini TGL Hari Ini Masih Lebih Kecil Dari Tanggal RCA Creation Date, Lakukan Hari Berikutnya")
         }

      }
      else{
          alert("RCA Actual, RCA Creation Date Sudah Di Set")
       }
     }
     else{
        alert("RCA Status Sudah Set Created");
     }
  }else{
    if(rca_status != 'Created')
    {
      if(actual_rca_creation_date === "")
      {
         if(date1 > dates2)
         {
            var addOneRCA  = parseInt(_of_rebaselined_rca_creation_target) + 1;  
            var convertProcces = new Date(dates2);
            convertProcces.setDate(convertProcces.getDate() + w1);
            var dd = convertProcces.getDate();
            var mm = convertProcces.getMonth() + 1;
            var y = convertProcces.getFullYear();
            var conertSucces1 = y + '-' + mm + '-' + dd;
            document.getElementById('rebaseline_rca_creation_date').value = conertSucces1;
            document.getElementById('_of_rebaselined_rca_creation_target').value = addOneRCA;
         }
         else{
             alert("RCAC Belum Bisa Dilakukkan Pada Saat Ini TGL Hari Ini Masih Lebih Kecil Dari Tanggal RCA Creation Date, Lakukan Hari Berikutnya")
         }

      }
      else{
          alert("RCA, Actual RCA Creation Date Sudah Di Set")
       }
     }
     else{
        alert("RCA Status Sudah Set Created");
     } 
 }
     
     
   //IMP
var actual_implementation_date                 = (document.getElementById("actual_implementation_date").value);
var _of_rebaselined_implementation_date_target = (document.getElementById("_of_rebaselined_implementation_date_target").value);
var date3  = Date.now(); 
var date4  = Date.parse(imp_creation_date);
var dates4 = Date.parse(rebaseline_imp_creation_date);

 if(rebaseline_imp_creation_date === ""){  
   if(actual_implementation_date === "")
   {
       if(date3 > date4)
       {
           if (_of_rebaselined_implementation_date_target < 1)
           {
                var addIMP  = _of_rebaselined_rca_creation_target + 1;   
                var convertProcces = new Date(date4);
                convertProcces.setDate(convertProcces.getDate() + w2);
                var dd = convertProcces.getDate();
                var mm = convertProcces.getMonth() + 1;
                var y = convertProcces.getFullYear();
                var conertSucces2 = y + '-' + mm + '-' + dd;
                document.getElementById('rebaseline_imp_creation_date').value = conertSucces2;
                document.getElementById('_of_rebaselined_implementation_date_target').value = addIMP;
           }       
           else{
               alert("IMP Terdafat Data Salah")
           }
        }
        else{
             alert("IMP Belum Bisa Dilakukkan Pada Saat Ini TGL Hari Ini Masih Lebih Kecil Dari Tanggal First IMP Date Target, Lakukan Hari Berikutnya")
         }
      }
      else{
          alert("IMP, Actual IMP Creation Date Sudah Di Set")
     }
 }
 else{
    if(actual_implementation_date === "")
   {
       if(date3 > dates4)
       {
         var addIMP  = parseInt(_of_rebaselined_rca_creation_target) + 1;   
         var convertProcces = new Date(dates4);
         convertProcces.setDate(convertProcces.getDate() + w2);
         var dd = convertProcces.getDate();
         var mm = convertProcces.getMonth() + 1;
         var y = convertProcces.getFullYear();
         var conertSucces2 = y + '-' + mm + '-' + dd;
         document.getElementById('rebaseline_imp_creation_date').value = conertSucces2;
         document.getElementById('_of_rebaselined_implementation_date_target').value = addIMP;       
        }
        else{
             alert("IMP Belum Bisa Dilakukkan Pada Saat Ini TGL Hari Ini Masih Lebih Kecil Dari Tanggal First IMP Date Target, Lakukan Hari Berikutnya")
         }
      }
      else{
          alert("Actual IMP Creation Date Sudah Di Set")
     }   
 }
        

  

  
}


</script>
</head>
<body>
<h1>Swapping Songs</h1>

<span style="margin-right:1px">Assign Date</span>
<input id="assign_date" type="text" value="2019-06-11"></br>

<span style="margin-right:1px">Priority</span>
<select name="priority" id="priority">
    <option value="">.:Select:.</option>
    <option value="P1">P1</option>
    <option value="P2">P2</option>
    <option value="P3">P3</option>
    <option value="P4">P4</option>
</select><br/>

<span style="margin-right:1px">RCA Creation Target (otomatis)</span>
<input id="rca_creation_date" type="text" value="2019-7-23"></br>


<span style="margin-right:1px; color: red">Rebaselined RCA Creation Target (otomatis)</span>
<input id="rebaseline_rca_creation_date" type="text" value="2019-9-3"></br>

<span style="margin-right:1px; color: red">#of Rebaselined RCA Creation Target (otomatis)</span>
<input id="_of_rebaselined_rca_creation_target" name="_of_rebaselined_rca_creation_target" type="text" value="1"></br>


<hr/>
<span style="margin-right:1px">First Implementation Date Target (otomatis)</span>
<input id="imp_creation_date"  name="imp_creation_date" type="text" value="2019-9-3"></br>

<span style="margin-right:1px; color: red">Rebaselined Implementation Date Target (otomatis)</span>
<input id="rebaseline_imp_creation_date" type="text" value="2019-11-26"></br>

<span style="margin-right:1px; color: red">#of Rebaselined IMP Creation Target (otomatis)</span>
<input id="_of_rebaselined_implementation_date_target" name="_of_rebaselined_implementation_date_target" type="text" value="1"></br>


<br/>
<hr/>
<span style="margin-right:1px; color: red">RCA Status</span>
<input id="rca_status" name="rca_status" type="text" value="Progress"></br>

<span style="margin-right:1px; color: red">Actual RCA Creation Date</span>
<input id="actual_rca_creation_date" name="actual_rca_creation_date" type="text"></br>

<span style="margin-right:1px; color: red">Actual IMP Creation Date</span>
<input id="actual_implementation_date" name="actual_implementation_date" type="text"></br>


<a href="javascript:void()" onclick="generate();return false;">Generate</a>
</body>
</html>
