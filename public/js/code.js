$(document).ready(function(){
    $('#license_plate').autocomplete({
        source: function(request,cb){
         $.ajax({
          url: '/payment/'+request.term,
          method:'GET',
          dataType:'json',
          success: function(res){
            var result;
            result =[
              {
                  label:""+request.term,
                  value:''
              }
            ];
            console.log(res);
            if(res.length){
              result =$.map(res,function(obj){
                return{
                  label: obj.license_plate,
                  value: obj.license_plate,
                  data: obj
                };
              });
            }
            cb(result);
          }
         });
        },
        select: function(e, selectedData){
            console.log(selectedData);
  
            if(selectedData && selectedData.item && selectedData.item.data){
              var result = selectedData.item.data;
  
              $('#owner').val(result.name);
              $('#vehicle_type').val(result.name_type);
              $('#vehicle_id').val(result.id);
              $('#member').val(result.type_member);
              $('#date1').val(result.date_in);
              $('#date2').val(result.time_in);
              $('#date_in').val(result.created_at);
              $('#hourlyrate').val(result.value);
              $('#hourlyrate_id').val(result.hours_id);
            }
            
            let inputStart = document.getElementById('date1').value;
            let inputEnd = document.getElementById('date2').value;
            let fill = inputStart +" "+ inputEnd;
            let fillStart = new Date(fill);
            let end = new Date();
            let difference = end - fillStart;
          
            let days = Math.floor(difference / (1000 * 60 * 60 * 24));
            let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((difference % (1000 * 60)) / 1000);
            let hasilhitung = {day:days,hour:hours,minutes:minutes};
            document.getElementById('parkingduration').value=hasilhitung.day+' Days '+hasilhitung.hour+' Hours '+hasilhitung.minutes+' Minutes ';
             
            let valueHour = document.getElementById('hourlyrate').value;
            
            let countDays = ((hasilhitung.day * 24)+hasilhitung.hour) * valueHour;
  
            document.getElementById('hasil').value=countDays;
        }
    });
   });
  
   $('#resetall').click(function(){
    location.reload();
      });
  //  const ac = document.getElementsByClassName('active')[0];
  // if(ac.className === 'active'){
  //  document.getElementById('form-header').style.display="none";
  // }

  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const btnCloseMenu = document.querySelector(".btn-close-menu");
  const aside = document.querySelector("aside");
  
  const openProfil = document.querySelector(".open");
  const profil = document.querySelector(".profil-wrapper");

  openProfil.addEventListener("click",()=>{
    profil.classList.remove('hidden');

    if(!profil.classList.toggle("open")){
      if(profil.classList.contains("close")){
        profil.classList.add("hidden");
      }
    }
  });



btnOpenMenu.addEventListener("click", ()=>{
   aside.classList.remove("closed");
   
});

btnCloseMenu.addEventListener("click", ()=>{
  aside.classList.add('closed');
});


  $(window).on('load', function(){
    $('.loader').fadeOut(3000);
  });