<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<body>
<div>
        <img src="img/cloud.png" style="display:inline-block; float: left; width:150px;height:150px;align:middle;">
        <h1 style="float: left;margin-top: 29px;padding: 0 0 0 17px;font-size:6vw;color:rgb(66,133,244);">Google Cloud for PHP Learners</h1>
        <?php
                date_default_timezone_set("Asia/Calcutta");
                echo "" . date_default_timezone_get() . " : " . date("H:i:s");
        ?>
        <h2 style="">Hello Learners, Welcome to the Study Jam Demo Website!</h2>
        <p>
            PHP tools is used to build cloud-native apps, deploy at scale, and analyze data on Google Cloud Platform. Google Cloud Platform offers four hosting options for PHP
 developers eg. Compute Engine, App Engine and GKE. App Engine has two environments: the standard environment and the flexible environment. 
        </p>
        <ul style= "color:rgb(66,133,244)">
                <li>With GCE cloud servers, you get the maximum server speed for your websites. All the GCE servers are optimized for breath-taking speed during peak times.</l
i>
                <li>There is no compromise on the performance of your cloud servers hosted on GCE infrastructure. All you get is a scintillating server performance with 99.99%
 uptime.</li>
                <li>There is what you call scalability. You can easily scale your GCE cloud servers in just one click. In this way, you can handle unprecedented traffic spikes
 on your PHP website with ease.</li>
        </ul>  
        <h4>Let's get to know more about some of the famous Google Cloud Services</h4>
        <p>
                <u style="color:rgb(66,133,244);"><b>Google Cloud Storage</b></u> <br> <br>                
                        Google Cloud Storage is a RESTful online file storage web service for storing and accessing data on Google Cloud Platform infrastructure. The service c
ombines the performance and scalability of Google's cloud with advanced security and sharing capabilities. It is an Infrastructure as a Service (IaaS), comparable to Amazon S3
 online storage service. Contrary to Google Drive and according to different service specifications, Google Cloud Storage appears to be more suitable for enterprise. <br>
                        Google Storage offers four storage classes, identical in throughput, latency, and durability. The four classes, Multi-Regional Storage, Regional Storag
e, Nearline Storage, and Coldline Storage, differ in their pricing, minimum storage durations, and availability. <br><br>
                        Learn more about Google Cloud Storage → <a href="https://youtu.be/081hh6EzlTk"> https://youtu.be/081hh6EzlTk </a>
        </p>
        <p>
                <u style="color:rgb(66,133,244);"><b>Google App Engine</b></u> <br><br>
                
            Google App Engine (often referred to as GAE or simply App Engine) is a Platform as a Service and cloud computing platform for developing and hosting web applicatio
ns in Google-managed data centers. Applications are sandboxed and run across multiple servers. App Engine offers automatic scaling for web applications—as the number of reques
ts increases for an application, App Engine automatically allocates more resources for the web application to handle the additional demand. <br>
            Google App Engine is free up to a certain level of consumed resources and only in the standard environment but not in a flexible environment. Fees are charged for 
additional storage, bandwidth, or instance hours required by the application.<br><br>
            Learn more about Google App Engine → <a href="https://youtu.be/2PRciDpqpko"> https://youtu.be/2PRciDpqpko </a>
        </p>
        <p>
                <u style="color:rgb(66,133,244);"><b>Cloud Datastore</b></u> <br><br>
                
            Cloud Datastore is a NoSQL document database built for automatic scaling, high performance, and ease of application development. Cloud Datastore features include:A
tomic transactions,Massive scalability with high performance, Balance of strong and eventual consistency,Fully managed with no planned downtime.<br>
            Cloud Datastore is ideal for applications that rely on highly available structured data at scale.<br><br>
            Learn more about Cloud Datastore → <a href="https://www.youtube.com/watch?v=fQazhzcC-rg"> https://www.youtube.com/watch?v=fQazhzcC-rg </a>  
        </p>
        <p>
                <u style="color:rgb(66,133,244);"><b>Cloud Pub/Sub</b></u> <br><br>
                
            Data ingestion is the foundation for analytics and machine learning, whether you are building stream, batch, or unified pipelines. Cloud Pub/Sub provides a simple 
and reliable staging location for your event data on its journey towards processing, storage, and analysis.Cloud Pub/Sub is designed as a premium service that lets Google Clou
d users focus on application logic, regardless of location or scale.<br>
            On Google Cloud Platform applications that communicate by sending messages through Cloud Pub/Sub rather than synchronous RPCs.
            <br><br>
            Learn more about Cloud Pub/Sub → <a href="https://www.youtube.com/watch?v=oKU2wbTXMTY"> https://www.youtube.com/watch?v=oKU2wbTXMTY </a>  
        </p>
</div>
</body>
</html>