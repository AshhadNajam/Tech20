<?php include 'include/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>



<style>
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
            <h4>Effective Communication & Interpersonal Skills</h4>
            <p style="text-align:justify;">
                This one-day training has been developed specifically to teach participants interpersonal skills that
                lead to more
                effective, satisfying, and rewarding relationships with those around us.
                This Effective Communication & Interpersonal Course helps people communicate effectively, appropriately,
                and
                clearly in all situations. It's a great learning opportunity for everyone; the benefits can have a
                positive impact on every
                aspect of their lives. Learn to understand how you communicate, how others communicate, and adjust to
                meet their
                needs; this will help them receive your message more clearly and improve relationships in general. If
                you have never
                completed a Communications Course of this type, you are missing out on awareness and understanding of
                fundamental concepts that can have a profound effect on your life and success in the workplace.
                Ultimately, participants will gain a hands-on knowledge of communication skills and apply them in their
                professional
                and personal lives
            </p>
        </div>
    </div>
</section>

<section class="traing-sec">
    <div class="container">
        <h2>WORKSHOP OUTLINE</h2>
        <h5>Module 1: Introduction to Modern Business Communications</h5>
        <ul>
            <li> Understanding the Communication Process</li>
            <li>Recognizing the Risks of Poor Communication and Key Elements of Effectiveness</li>
            <li>Distinguishing Between Business and Interpersonal Communication</li>
            <li>Internal vs. External Business Communication</li>
            <li>Exploring Business Communication Channels and Tools</li>
            <li>Examining Communication Styles and Models</li>
        </ul>

        <h5>Module 2: Mastering Verbal and Non-Verbal Communication</h5>
        <ul>
            <li>Efficient Speaking in a Business Environment</li>
            <li>Developing Listening Skills</li>
            <li>Crucial Elements and Components of Non-Verbal Communication</li>
            <li>Adapting Non-Verbal Communication to Situations and Building Rapport</li>
            <li>Proven Tools and Techniques for Verbal and Nonverbal Communication</li>
        </ul>
        <h5>Module 3: Telephone Communications</h5>
        <ul>
            <li>Fundamental Rules of Telephone Business Communication</li>
            <li>Telephone Etiquette</li>
            <li>Exercises to Enhance Telephone Skills</li>
        </ul>
        <h5>Module 4: Digital Business Communication</h5>
        <ul>
            <li>Effective Use of Email</li>
            <li>Navigating Social Media for Business</li>
            <li>Utilizing Messaging Platforms</li>
            <li>Conducting Successful Video Conferences</li>

        </ul>
        <h5>Module 5: Dealing with Business Communication Challenges Effectively</h5>
        <ul>
            <li>Giving and Receiving Feedback</li>
            <li>Fundamentals of Conflict Management</li>
            <li>Strategies for Dealing with Difficult People</li>
            <li>Business Negotiation Skills</li>
            <li>Cross-Cultural Communication: Awareness and Main Rules</li>
            <li>Culture and Communication Strategies</li>
            <li>Networking</li>
        </ul>
        <h5>Module 6: Active Listening</h5>
        <ul>
            <li> Differentiating Between Hearing and Listening</li>
            <li>Active vs. Passive Listening</li>
            <li>Tips to Improve Active Listening Skills</li>
            <li>The Three Aspects of Active Listening</li>

        </ul>

        <h5>METHODOLOGY</h5>
        <p>This workshop is based on a combination of theoretical and practical learning methods. The workshop would
            include:
        <ul>
            <li>Interactive lectures by the trainer</li>
            <li>Individual exercises and assignments for the participants</li>
            <li>Feedback and evaluation from the trainer and the participants</li>

        </ul>

        The workshop will also use a contextual presentation deck that will illustrate the main points and examples
        of the
        workshop. It will be advantageous if all the participants have laptops during the session. </p>

        <h5>DURATION</h5>
        <p>This workshop will last for one day 09:00 – 17:00 (8 hours), with two 15-minute tea breaks in the morning
            and
            afternoon sessions, and a one-hour lunch & prayer break.</p>


        <h5>PARTICIPANTS</h5>
        <p>This workshop is suitable for participants in Lower & Middle management roles who use different channels
            of
            communication in their work. The workshop can accommodate up to 20 participants.</p>


        <h5>LEARNING INVESTMENT</h5>
        <p>The total cost of this workshop is PKR 200,000 (Tax Exclusive), for 20 Participants. This includes:</p>
        <ul>
            <li>Trainer fees</li>
            <li>Trainer Commute to the training facility (within Karachi)</li>
            <li>Training materials (handouts, worksheets, etc.)</li>
            <li>Presentation deck</li>
            <li>Certificate of completion for each participant</li>
        </ul>
        <p>The cost does not include:</p>
        <ul>
            <li>Venue rental</li>
            <li>Catering services</li>
            <li>Travel expenses (if applicable)</li>
        </ul>

        <h5>PAYMENTS</h5>
        <p>
            On approval of the proposal, 50% advance is payable by cheque in the name of “____________________”. The
            remaining
            amount is payable to the same upon completion of the program. All charges mentioned in the proposal are
            exclusive
            of tax(es)
        </p>

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


<?php include 'include/contact-footer.php'; ?>




<?php include 'include/footer.php'; ?>