<?php include 'include/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>



<style>
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    margin-right: 10px;
    margin-left: -44px
}

.btn-circle {
    cursor: pointer;
    display: inline-block;
    padding: 8px 13px;
    background: linear-gradient(to top, rgba(224, 150, 0, 1), rgba(255, 201, 7, 1));
    border-radius: 50%;
    color: #FFF;
    font-size: 10px;
}

section.inn-banner {
    position: relative;
    height: 300px;
    overflow: hidden;
}

.other-con {
    max-width: 1028px;
    width: 100%;
    margin: 0 auto;
    padding: 40px 0;
}

.cat-row-box ul li a {
    display: block;
    padding: 15px 5px;
    font-size: 11px;
    display: inline-block;
    color: #b12b2c;
    /* text-transform: uppercase; */
    border: 2px solid #b12b2c;
    border-radius: 30px;
    margin-left: 10px;
    box-shadow: 1px 1px 12px 2px rgb(0 0 0 / 50%) !important;
}

.cat-row-box ul li a:hover {
    color: #fff;
    background-color: #b12b2c;
    cursor: pointer;
}


.cat-row-box ul {
    margin: 0;
    padding: 0;
}

.cat-row-box {
    margin: 10px 0 0 0;
    padding: 0;
    text-align: center;
}

body {
    margin: 0;
    padding: 0;
    color: #666666;
    font-family: 'open_sansregular';
}

.cat-row-box ul li {
    list-style-type: none;
    display: inline-block;
    margin: 10px;
}

.cat-row-box-long li a {
    width: 220px;
}

.title-holder h2 {
    text-transform: uppercase;
    font-weight: normal;
    font-family: 'open_sanslight';
    font-size: 30px;
    line-height: 30px;
    text-align: center;
}


ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

.search {
    text-align: right;

}

.float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 20px;
    right: 30px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 40px;
    box-shadow: 2px 2px 3px #999;
    z-index: 1000;
}

.h2,
h2 {
    font-size: 29px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/qr/ZLAZRQ2BXAMSE1" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i> </a>

<section class="inn-banner">
    <div class="container">
        <div class="inn-cap">
            <br>
            <h4>ORACLE PRIMAVERA TRAINING</h4>
            <p style="text-align: justify;">In today's dynamic business landscape, Oracle Primavera stands as a formidable project management solution, enabling organizations to not just manage projects, but to excel at it. It's a tool that goes beyond the basics, offering a plethora of features for seamless project planning, resource allocation, and cost management. However, the true power of Oracle Primavera can only be unlocked through comprehensive training. This article delves into the vital role of Oracle Primavera training, where professionals gain the expertise to navigate the intricate world of project management. From optimizing resource utilization to keeping projects within budget and on time, this training is the key to achieving project success, even in the most challenging environments.</p>


        </div>
    </div>
</section>

<section class="traing-sec">
    <div class="container">
        <h5>Understanding Oracle Primavera Training:</h5>
        <p>Oracle Primavera training equips project managers and teams with the knowledge and skills needed to utilize this project management software to its fullest potential. It goes beyond basic project management training and focuses on the specific features and functionalities of Oracle Primavera.</p>

        <h2>Key Components of Oracle Primavera Training:</h2>
        <h5>Project Planning and Scheduling:</h5>
        <p>Oracle Primavera is known for its robust project planning and scheduling capabilities. Training covers how to create project schedules, allocate resources, and manage project timelines effectively.</p>

        <h5>Resource Management:</h5>
        <p>Effective resource management is crucial for project success. Oracle Primavera training teaches users how to allocate and manage resources efficiently to optimize project outcomes.</p>

        <h5>Cost Management:</h5>
        <p>Managing project costs is a key aspect of project management. Training includes cost estimation, budgeting, and tracking features within Oracle Primavera.</p>

        <h5>Risk Analysis and Mitigation:</h5>
        <p>Risks are an inherent part of any project. Training helps project managers identify, analyze, and mitigate risks using Oracle Primavera's risk management tools.</p>

        <h5>Reporting and Analysis:</h5>
        <p>Oracle Primavera offers powerful reporting and analysis capabilities. Training covers how to create insightful reports and analyze project data to make informed decisions.</p>

        <h5>Integration and Collaboration:</h5>
        <p>Oracle Primavera can be integrated with other tools and allows for collaboration among team members. Training explores integration options and collaboration features.</p>

        <h5>Benefits of Oracle Primavera Training:</h5>
        <ul>
            <li>Improved Project Management: Oracle Primavera training enhances project management skills and ensures efficient project planning and execution.</li>
            <li>Enhanced Resource Utilization: Training enables organizations to make better use of their resources, reducing wastage and improving productivity.</li>
            <li>Better Cost Control: With proper training, organizations can effectively manage project costs, preventing budget overruns.</li>
            <li>Risk Mitigation: Oracle Primavera training helps in identifying and mitigating project risks, reducing the likelihood of project failures.</li>
            <li>Data-Driven Decision Making: Training empowers project managers with the ability to make data-driven decisions for project success.</li>
        </ul>

        <h5>Conclusion:</h5>
        <p>Oracle Primavera training is a critical investment for organizations seeking to excel in project management. It equips professionals with the knowledge and skills needed to harness the full potential of this powerful project management tool. By providing Oracle Primavera training, organizations can ensure that their project teams are well-prepared to handle complex projects and achieve success in the ever-evolving world of project management.</p>

        <input type="search" class="search" id="searchInput" placeholder="Search for Oracle Primavera training">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Timing</th>
                    <th scope="col">Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Oracle Primavera Training</td>
                    <td>Flexible Timings</td>
                    <td>Online</td>
                    <td>
                        <a href="oracle_primavera_training.html">
                            <div class="btn-circle"><i class="fa fa-chevron-right" href="oracle_primavera_training.html" aria-hidden="true"></i>
                            </div>
                        </a>
                    </td>
                </tr>
                <!-- Add more training sessions as needed -->
            </tbody>
        </table>
        <div id="pagination" class="text-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <!-- Add more page numbers as needed -->
            </ul>
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    // Cache the table rows for better performance
    var rows = $('#example tbody tr');

    // Search functionality
    $('#searchInput').on('input', function() {
        var searchText = this.value.toLowerCase();
        rows.hide().filter(function() {
            var title = $(this).find('td:first').text().toLowerCase();
            return title.includes(searchText);
        }).show();
    });
});
</script>
<br>

<div class="other-con">
    <div class="title-holder tLeft">
        <h2 class="fLightBlue">DISCOVER <br><b>OTHER CATEGORIES</b></h2>
        <div class="cat-row-box">
            <ul class="cat-row-box-long">
                <li><a href="https://aztechtraining.com/training-courses/certnexus-">CertNexus </a></li>
                <li><a href="https://aztechtraining.com/training-courses/emotional-intelligence">Emotional
                        Intelligence</a></li>
                <li><a href="https://aztechtraining.com/training-courses/innovation-strategy">Innovation &amp;
                        Strategy</a></li>
                <li><a href="https://aztechtraining.com/training-courses/quality-of-life">Quality of Life &amp;
                        Work-Life Balance</a></li>
                <li><a href="https://aztechtraining.com/training-courses/business-operations">Business Operations</a>
                </li>
                <li><a href="https://aztechtraining.com/training-courses/agile-transformation">Agile Transformation</a>
                </li>
                <li><a href="https://aztechtraining.com/training-courses/operational-excellence">Operational
                        Excellence</a></li>
                <li><a href="https://aztechtraining.com/training-courses/human-resource-management">Human Resource HR
                        Management</a></li>
                <li><a href="https://aztechtraining.com/training-courses/administrative-support">Office Management and
                        Administration</a></li>
                <li><a href="https://aztechtraining.com/training-courses/sales-marketing">Sales &amp; Marketing</a></li>
                <li><a href="https://aztechtraining.com/training-courses/public-relations">Public Relations PR &amp;
                        Branding</a></li>
                <li><a href="https://aztechtraining.com/training-courses/professional-development-for-women">Professional
                        Development for Women</a></li>
                <li><a href="https://aztechtraining.com/training-courses/finance-accounting">Finance, Accounting &amp;
                        Budgeting</a></li>
                <li><a href="https://aztechtraining.com/training-courses/tax-revenue-management">Tax &amp; Revenue
                        Management</a></li>
                <li><a href="https://aztechtraining.com/training-courses/banking-investment">Banking &amp;
                        Investment</a></li>
                <li><a href="https://aztechtraining.com/training-courses/audit-and-quality-assurance">Audit &amp;
                        Quality Assurance</a></li>
                <li><a href="https://aztechtraining.com/training-courses/project-management">Project Management</a></li>
                <li><a href="https://aztechtraining.com/training-courses/contracts-management">Contracts Management</a>
                </li>
                <li><a href="https://aztechtraining.com/training-courses/procurement-materials-management-">Procurement
                        &amp; Materials Management </a></li>
                <li><a href="https://aztechtraining.com/training-courses/risk-crisis-management">Risk &amp; Crisis
                        Management</a></li>
                <li><a href="https://aztechtraining.com/training-courses/security-management">Security Management</a>
                </li>
                <li><a href="https://aztechtraining.com/training-courses/health-safety-security">Health, Safety &amp;
                        Environment</a></li>
                <li><a href="https://aztechtraining.com/training-courses/agricultural-rural-development">Agricultural
                        &amp; Rural Development</a></li>
                <li><a href="https://aztechtraining.com/training-courses/oil-and-gas-training">Oil &amp; Gas
                        Training</a></li>
                <li><a href="https://aztechtraining.com/training-courses/mechanical-engineering">Mechanical
                        Engineering</a></li>
                <li><a href="https://aztechtraining.com/training-courses/instrumentation-process-control">Instrumentation
                        &amp; Process Control</a></li>
                <li><a href="https://aztechtraining.com/training-courses/maintenance-management">Maintenance Management
                        &amp; Engineering</a></li>
                <li><a href="https://aztechtraining.com/training-courses/material-processing">Material Processing</a>
                </li>
                <li><a href="https://aztechtraining.com/training-courses/electrical-engineering">Electrical
                        Engineering</a></li>
                <li><a href="https://aztechtraining.com/training-courses/power-utilities-and-energy">Power, Utilities
                        &amp; Energy</a></li>
                <li><a href="https://aztechtraining.com/training-courses/marine-coastal">Marine &amp; Coastal</a></li>
                <li><a href="https://aztechtraining.com/training-courses/data-management-cybersecurity">Data Management
                        &amp; Cybersecurity</a></li>
                <li><a href="https://aztechtraining.com/training-courses/telecommunication">Telecommunication</a></li>
                <li><a href="https://aztechtraining.com/training-courses/accredited-certified">Accredited &amp;
                        Certified</a></li>
                <li><a href="https://aztechtraining.com/training-courses/vision-2030-realization-training-courses">Vision
                        2030 Realization Training Courses</a></li>
                <li><a href="https://aztechtraining.com/training-courses/the-aztech-certificate-series-">The AZTech
                        Certificate Series </a></li>
                <li><a href="https://aztechtraining.com/training-courses/soft-skills-training-">Soft Skills Training
                        Courses</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom JavaScript for Search and Pagination -->


<?php include 'include/contact-footer.php';?>




<?php include 'include/footer.php';?>