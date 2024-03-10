
                    
                    

	   setInterval(customClock, 500);

	   function customClock() {
	       var time = new Date();
	       var hrs = time.getHours();
	       var min = time.getMinutes();
	       var sec = time.getSeconds();
	       
	       document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
	       
	   }
       function X(){
        const first = document.getElementById('dateFirst').value;    
        const second = document.getElementById('secondDate').value; 
        
        const startTimeStamp = new Date(first).getTime();
        // const endTimeStamp = new Date(second).getTime();
        
        // const difference = endTimeStamp - startTimeStamp;

        // const differenceInDays = Math.round(difference/(1000 * 60 *60 * 24));

        document.write('saadad');
    }
	   