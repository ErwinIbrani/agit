<!DOCTYPE html>
<html lang="en">
<head>
<title>Generate</title>
<script type="text/javascript">
function generate() {
  var assigned_date_id             = (document.getElementById("assigned_date_id").value);
  var priority                     = (document.getElementById("priority").value);
  var rca_status                   = ((document.getElementById("rca_status")||{}).value)||"";
  var actual_rca_date_id     = (document.getElementById("actual_rca_date_id").value);
  //auto RCA
  var rebase_rca_create_target_id  = (document.getElementById("rebase_rca_create_target_id").value);
  //auto IMP
  var rebase_imp_date_target_id = (document.getElementById("rebase_imp_date_target_id").value);
  var date  = new Date(assigned_date_id);

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
       var rca_create_target_id = document.getElementById('rca_create_target_id').value = rcaCreationDate;
      
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var first_date_target_id = document.getElementById('first_date_target_id').value = impCreationDate;
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
       var rca_create_target_id = document.getElementById('rca_create_target_id').value = rcaCreationDate;
      
       var w2 = 56; 
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var first_date_target_id = document.getElementById('first_date_target_id').value = impCreationDate;
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
       var rca_create_target_id = document.getElementById('rca_create_target_id').value = rcaCreationDate;
       
       var w2 = 84;
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var first_date_target_id = document.getElementById('first_date_target_id').value = impCreationDate;
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
       var rca_create_target_id = document.getElementById('rca_create_target_id').value = rcaCreationDate;
       
       var w2 = 112;
       var newdates     = new Date(date); 
       newdates.setDate(newdates.getDate() + w2);
       var dds = newdates.getDate();
       var mms = newdates.getMonth() + 1;
       var ys = newdates.getFullYear();
       var impCreationDate = ys + '-' + mms + '-' + dds;
       var first_date_target_id = document.getElementById('first_date_target_id').value = impCreationDate;
    }
  
  //RCA  
  var num_rebase_create_target_id = (document.getElementById("num_rebase_create_target_id").value);
  var date1  = Date.now(); 
  var date2  = Date.parse(rca_create_target_id);
  var dates2 = Date.parse(rebase_rca_create_target_id); 
  
  if(rebase_rca_create_target_id === ""){  
    if(rca_status != 'Created')
    {
      if(actual_rca_date_id === "")
      {
         if(date1 > date2)
         {
            if(num_rebase_create_target_id < 1)
            {
                var addOneRCA  = num_rebase_create_target_id + 1;   
                var convertProcces = new Date(date2);
                convertProcces.setDate(convertProcces.getDate() + w1);
                var dd = convertProcces.getDate();
                var mm = convertProcces.getMonth() + 1;
                var y = convertProcces.getFullYear();
                var conertSucces1 = y + '-' + mm + '-' + dd;
                document.getElementById('rebase_rca_create_target_id').value = conertSucces1;
                document.getElementById('num_rebase_create_target_id').value = addOneRCA;
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
      if(actual_rca_date_id === "")
      {
         if(date1 > dates2)
         {
            var addOneRCA  = parseInt(num_rebase_create_target_id) + 1;  
            var convertProcces = new Date(dates2);
            convertProcces.setDate(convertProcces.getDate() + w1);
            var dd = convertProcces.getDate();
            var mm = convertProcces.getMonth() + 1;
            var y = convertProcces.getFullYear();
            var conertSucces1 = y + '-' + mm + '-' + dd;
            document.getElementById('rebase_rca_create_target_id').value = conertSucces1;
            document.getElementById('num_rebase_create_target_id').value = addOneRCA;
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
var act_imp_date_id                 = (document.getElementById("act_imp_date_id").value);
var num_rebase_imp_date_target_id = (document.getElementById("num_rebase_imp_date_target_id").value);
var date3  = Date.now(); 
var date4  = Date.parse(first_date_target_id);
var dates4 = Date.parse(rebase_imp_date_target_id);

 if(rebase_imp_date_target_id === ""){  
   if(act_imp_date_id === "")
   {
       if(date3 > date4)
       {
           if (num_rebase_imp_date_target_id < 1)
           {
                var addIMP  = num_rebase_create_target_id + 1;   
                var convertProcces = new Date(date4);
                convertProcces.setDate(convertProcces.getDate() + w2);
                var dd = convertProcces.getDate();
                var mm = convertProcces.getMonth() + 1;
                var y = convertProcces.getFullYear();
                var conertSucces2 = y + '-' + mm + '-' + dd;
                document.getElementById('rebase_imp_date_target_id').value = conertSucces2;
                document.getElementById('num_rebase_imp_date_target_id').value = addIMP;
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
    if(act_imp_date_id === "")
   {
       if(date3 > dates4)
       {
         var addIMP  = parseInt(num_rebase_create_target_id) + 1;   
         var convertProcces = new Date(dates4);
         convertProcces.setDate(convertProcces.getDate() + w2);
         var dd = convertProcces.getDate();
         var mm = convertProcces.getMonth() + 1;
         var y = convertProcces.getFullYear();
         var conertSucces2 = y + '-' + mm + '-' + dd;
         document.getElementById('rebase_imp_date_target_id').value = conertSucces2;
         document.getElementById('num_rebase_imp_date_target_id').value = addIMP;       
        }
        else{
             alert("IMP Belum Bisa Dilakukkan Pada Saat Ini TGL Hari Ini Masih Lebih Kecil Dari Tanggal First IMP Date Target, Lakukan Hari Berikutnya");
         }
      }
      else{
          alert("Actual IMP Creation Date Sudah Di Set");
     }   
 }
       
}


</script>
</head>
<body>
<h1>Swapping Songs</h1>

<span style="margin-right:1px">Assign Date</span>
<input id="assigned_date_id" type="text"></br>

<span style="margin-right:1px">Priority</span>
<select name="priority" id="priority">
    <option value="">.:Select:.</option>
    <option value="P1">P1</option>
    <option value="P2">P2</option>
    <option value="P3">P3</option>
    <option value="P4">P4</option>
</select><br/>

<span style="margin-right:1px">RCA Creation Target (otomatis)</span>
<input id="rca_create_target_id" type="text"></br>


<span style="margin-right:1px; color: red">Rebaselined RCA Creation Target (otomatis)</span>
<input id="rebase_rca_create_target_id" type="text"></br>

<span style="margin-right:1px; color: red">#of Rebaselined RCA Creation Target (otomatis)</span>
<input id="num_rebase_create_target_id" name="num_rebase_create_target_id" type="text"></br>


<hr/>
<span style="margin-right:1px">First Implementation Date Target (otomatis)</span>
<input id="first_date_target_id"  name="first_date_target_id" type="text"></br>

<span style="margin-right:1px; color: red">Rebaselined Implementation Date Target (otomatis)</span>
<input id="rebase_imp_date_target_id" type="text"></br>

<span style="margin-right:1px; color: red">#of Rebaselined IMP Creation Target (otomatis)</span>
<input id="num_rebase_imp_date_target_id" name="num_rebase_imp_date_target_id" type="text"></br>


<br/>
<hr/>
<span style="margin-right:1px; color: red">RCA Status</span>
<input id="rca_status" name="rca_status" type="text" value="Progress"></br>

<span style="margin-right:1px; color: red">Actual RCA Creation Date</span>
<input id="actual_rca_date_id" name="actual_rca_date_id" type="text"></br>

<span style="margin-right:1px; color: red">Actual IMP Creation Date</span>
<input id="act_imp_date_id" name="act_imp_date_id" type="text"></br>


<a href="javascript:void()" onclick="generate();return false;">Generate</a>
</body>
</html>
