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
            <h4>SALES & CAPACITY BUILDING</h4>
            <p style="text-align: justify;">Sales is the lifeblood of any business, and in today's competitive
                landscape, sales professionals need more than just product knowledge and persuasive skills to excel.
                Capacity building training has emerged as a pivotal tool in honing the capabilities of sales teams. This
                article delves into the significance of sales and capacity building training and highlights its key
                components. </p>
        </div>
    </div>
</section>

<section class="traing-sec">
    <div class="container">
        <h5>Understanding Capacity Building Training in Sales:</h5>
        <p>Capacity building in sales encompasses a wide range of activities and strategies aimed at enhancing the
            skills, knowledge, and capabilities of sales professionals. It goes beyond traditional sales training by
            focusing on personal and professional growth, empowering sales teams to adapt to changing market dynamics
            and deliver exceptional results consistently.</p>

        <h2>Key Components of Sales and Capacity Building Training:</h2>
        <h5>Sales Techniques and Strategies: </h5>
        <p>While foundational sales techniques are crucial, capacity building training delves deeper into advanced
            strategies such as consultative selling, solution selling, and relationship management. Sales professionals
            learn to tailor their approaches to specific customer needs and market segments.</p>

        <h5>Product and Industry Knowledge:</h5>
        <p>Continuous learning about products, services, and industry trends is vital. Capacity building training
            ensures sales teams are up-to-date with the latest product developments and market insights, enabling them
            to provide value-added solutions to customers.</p>

        <h5>Communication and Emotional Intelligence:</h5>
        <p> Effective communication and emotional intelligence are essential in building rapport and trust with
            customers. Training in this area enhances active listening, empathy, and negotiation skills.</p>

        <h5>Cybersecurity Awareness:</h5>
        <p>With the rise in cyber threats, E-Leaders must understand the importance of cybersecurity. Training in this
            domain helps leaders recognize potential risks and implement strategies to protect their organizations from
            cyberattacks.</p>
        <h5>Digital Transformation Strategy:</h5>
        <p>E-Leadership training often includes a focus on digital transformation. Leaders learn how to develop and
            implement digital strategies that align with their organization's goals, ensuring a smooth transition into
            the digital age.</p>
        <h5>Benefits of E-Leadership Training:</h5>
        <ul>
            <li>Enhanced Adaptability: E-Leadership training equips individuals with the ability to adapt to rapidly
                changing technologies and market conditions, ensuring their organizations remain competitive.</li>
            <li>Improved Communication: Leaders learn how to effectively communicate in virtual environments, fostering
                better relationships with remote teams and stakeholders.</li>
            <li>Greater Innovation: E-Leaders are encouraged to embrace digital innovation, leading to the development
                of new products, services, and business models.</li>
            <li>Increased Cybersecurity: Training in cybersecurity helps leaders protect their organizations from
                threats, reducing the risk of data breaches and financial losses.</li>
            <li>Global Reach: E-Leadership training enables leaders to collaborate with international teams and tap into
                a global talent pool, expanding their organization's reach.</li>
        </ul>

        <h5>Conclusion:</h5>
        <p>E-Leadership training is essential for leaders in the digital age. It empowers individuals with the skills,
            knowledge, and mindset needed to excel in a technology-driven world. By investing in E-Leadership training,
            organizations can ensure that their leaders are well-prepared to navigate the complexities of the digital
            landscape and drive success in an increasingly interconnected global economy.</p>

        <input type="search" class="search" id="searchInput" placeholder="search for title">
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
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="">
                            <div class="btn-circle"><i class="fa fa-chevron-right" href="/" aria-hidden="true"></i>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="">
                            <div class="btn-circle"><i class="fa fa-chevron-right" href="/" aria-hidden="true"></i>
                            </div>
                        </a>

                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="">
                            <div class="btn-circle"><i class="fa fa-chevron-right" href="/" aria-hidden="true"></i>
                            </div>
                        </a>

                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="">
                            <div class="btn-circle"><i class="fa fa-chevron-right" href="about.php"
                                    aria-hidden="true"></i>
                            </div>
                        </a>



                    </td>
                </tr>
                <!-- Add more rows as needed -->
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
<!-- <script>
$(document).ready(function() {
    // Initialize pagination
    var table = document.getElementById('example');
    var itemsPerPage = 10; // Number of items per page
    var rowCount = table.tBodies[0].rows.length;
    var pageCount = Math.ceil(rowCount / itemsPerPage);

    var pagination = document.getElementById('pagination');
    for (var i = 1; i <= pageCount; i++) {
        var pageLink = document.createElement('a');
        pageLink.href = '#';
        pageLink.textContent = i;
        pageLink.addEventListener('click', function(e) {
            e.preventDefault();
            var pageNum = parseInt(this.textContent);
            showPage(pageNum);
        });
        var listItem = document.createElement('li');
        listItem.className = 'page-item';
        listItem.appendChild(pageLink);
        pagination.querySelector('ul.pagination').appendChild(listItem);
    }

    // Show the initial page
    showPage(1);

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
        var searchText = this.value.toLowerCase();
        var rows = table.tBodies[0].rows;
        for (var i = 0; i < rows.length; i++) {
            var title = rows[i].cells[0].textContent.toLowerCase();
            if (title.indexOf(searchText) === -1) {
                rows[i].style.display = 'none';
            } else {
                rows[i].style.display = '';
            }
        }
    });

    // Function to show a specific page
    function showPage(pageNum) {
        for (var i = 0; i < rowCount; i++) {
            if (i < (pageNum - 1) * itemsPerPage || i >= pageNum * itemsPerPage) {
                table.tBodies[0].rows[i].style.display = 'none';
            } else {
                table.tBodies[0].rows[i].style.display = '';
            }
        }
    }
});
</script> -->

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