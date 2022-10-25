<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- ----------------nav---------- -->
    <nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Scopy maintenance company</a>
        </div>
        <ul class=" navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="active"><a href="form/index.php">form</a></li>
        </ul>
    </nav>
     <!-- end nav -->
    <section class="sideNav">
        <div class="side">
            <button type="button" class="btn sectionSelect"><a href="">Our Customer Commetment</a></button>
            <button type="button" class="btn sectionSelect" id="sp-button"><a href="" class="sea">Service Program</a></button>
            <button type="button" class="btn sectionSelect"><a href="" class="seb">Consulting & Analytics</a></button>
            <button type="button" class="btn sectionSelect"><a href="" class="sec">Support Center</a></button>

        </div>


        <div class="commetment section">
            <div class="haya">
                our customer commetment
            </div>
            <img src="image/Services - Our Customer Commitment.jpg" alt="">
            <p>In today’s demanding health care environment, partnering with a capable service provider who delivers consistently is<br> critical. PENTAX Medical’s industry-leading instrument loaner program, repair quality, and efficient repair turnaround<br> times reflect our commitment to our customers’ success.</p>
            <p>Learn more about PENTAX Medical’s commitment to a successful partnership.</p>
            <p>Not all service and operational support offerings are available in all regions. To find out more, please contact your local<br> PENTAX Medical representative.</p>
        </div>

        <div class="commetment section">
            <div class="haya">
                service programs
            </div>
            <img src="image/1007Wurzbach8482 service programs (1).jpg" alt="" id="serv">
            <p>PENTAX Medical’s comprehensive, cost-effective service programs keep equipment running to spec with minimal<br> downtime. Now, and over the entire lifetime of the investment, our service programs save customers time and money.</p>
            <p>Find the service program that fits your needs</p>
            <p>Not all service and operational support offerings are available in all regions. To find out more, please contact your local <br>PENTAX Medical representative.</p>
        </div>

        <div class="commetment section">
            <div class="haya">
                our customer 
            </div>
            <img src="image/Services - Consulting & Analytics.jpg" alt="" id="serv">
            <p>IPENTAX Medical Service will evaluate your current equipment and routines to proactively identify any equipment <br> utilization, handling, safety and other issues that are impeding your performance. We apply our know-how, experience,<br> and analytical tools to improve your clinical and financial results.</p>
            <p>Learn how PENTAX Medical Service can help you increase efficiencies and reduce costs.</p>
            <p>Not all service and operational support offerings are available in all regions. To find out more, please contact your local PENTAX Medical representative</p>
        </div>
        <div class="commetment section">
            <div class="haya">
                our batoot
            </div>
            <img src="image/1007Wurzbach9143 support center.jpg" alt="" id="serv">
            <p>In today’s demanding health care environment, partnering with a capable service provider who delivers consistently is<br> critical. PENTAX Medical’s industry-leading instrument loaner program, repair quality, and efficient repair turnaround<br> times reflect our commitment to our customers’ success.</p>
            <p>Learn more about PENTAX Medical’s commitment to a successful partnership.</p>
            <p>Not all service and operational support offerings are available in all regions. To find out more, please contact your local<br> PENTAX Medical representative.</p>
        </div>
    </section> 
    <script>
        
        let sections = document.getElementsByClassName("section");
        let selectors = document.getElementsByClassName("sectionSelect");

        const resetAll = () =>{
            for (let i = 0; i < sections.length; i++) {
                sections[i].style.display = "none";
                
            }
        }

        for (let i = 0; i < selectors.length; i++) {
            selectors[i].addEventListener("click", (e)=> {
                e.preventDefault();
                resetAll();
                sections[i].style.display = "block";
            });
            
        }

        
        resetAll();
        sections[0].style.display = "block";
        
    </script>  






































        <script src="index.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>