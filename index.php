<?php include('./dashboard/connection.php') ?>
<?php include('include/header.php') ?>

<section class="first-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-7 col-12 py-3">
        <div class="lt-side pt-md-5 mt-2 ms-md-4 me-md-5 d-flex justify-content-between flex-column">
          <h2 class="mb-3 main-heading text-white">
            RHCSA and RHCE - <span class="">With</span> Placement Assistance Program
          </h2>

          <p class="mb-3 text-white  min3-font">
            Red Hat Certified System Administrator (RHCSA) is an entry-level certification course that covers Linux essentials (RH124) and Linux administration (RH134). It focuses on fundamental skills in system administration, such as installing and configuring a Red Hat Enterprise Linux system and connecting it to a live network where network services are running.

            Linux2Cloud’s Automation with Ansible also known as RHCE teaches the skills needed to manage large numbers of systems and applications efficiently and consistently. You will learn the techniques needed to use Ansible® to automate provisioning, configuration, application deployment, and orchestration.
          </p>

          <div class="mb-md-5 mb-0">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn me-md-2 me-0 mb-3 mb-md-0">Apply Now</a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn">Download Brochure</a>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-5 col-12 first-sec-form py-4">
        <div class="rt-side mt-4">
          <div class="join-us-card mx-4">
            <h5 class="mb-4 mx-3">Upskill for Your Dream Job</h5>
            <form class="contact-form" id="form" method="POST" action="">
              <div class=" mb-4">
                <div class="mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Full Name" required autocomplete="off" id="name" />
                </div>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" required autocomplete="off" id="email" />
                </div>
                <div class="mb-3">
                  <input type="number" name="number" class="form-control" placeholder="Mobile Number" required autocomplete="off" id="number" />
                </div>
                <div class="mb-3">
                  <input type="text" name="city" class="form-control" placeholder="City" required autocomplete="off" id="city" />
                </div>
                <div class="mb-3 pt-1">
                  <button type="submit" class="btn w-100">Submit</button>
                </div>
              </div>
              <div class="mb-2">
                <p class="mb-0" style="font-size: 15px;">
                  By providing your contact details, you agree to our
                  <a href="#" class="terms">Terms of Use</a> &
                  <a href="#" class="policy">Privacy Policy</a>
                </p>
              </div>
              <div class="msg_reply"></div>
            </form>

            <?php

            if (isset($_REQUEST['number'])) {
              $name = htmlspecialchars($_REQUEST['name']);

              $email = htmlspecialchars($_REQUEST['email']);

              $number = $_REQUEST['number'];

              $city = $_REQUEST['city'];


              try {
                $query = "insert into contact (name,email,number,city) values ('$name','$email' , '$number' , '$city')";
                $subscribe = mysqli_query($conn, $query);



                if ($subscribe) {

                  echo "<span class='text-white'>submitted successfuly.</span>";
                } else {

                  echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
                }
              } catch (\Exception $e) {
                printf(mysqli_error($conn));
              }
            }

            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="second-sec">
  <div class="container">
    <div class="top">
      <div class="row top-card">
        <div class="col-md-3 col-12 card-body">
          <img src="./assets/Camping Tent.png" alt="" class="second-sec-top-img" />
          <p class="head">Online live session</p>
          <p class="sub-head">Online Boot Camp</p>
        </div>
        <div class="col-md-3 col-12 card-body">
          <img src="./assets/Live Video On.png" alt="" class="second-sec-top-img" />
          <p class="head">Live Classes</p>
          <p class="sub-head">3-4 Months</p>
        </div>
        <div class="col-md-3 col-12 card-body">
          <img src="./assets/New Job.png" alt="" class="second-sec-top-img" />
          <p class="head">Guaranteed</p>
          <p class="sub-head">100% Placement Assistance</p>
        </div>
        <div class="col-md-3 col-12 card-body">
          <img src="./assets/Cash in Hand.png" alt="" class="second-sec-top-img" />
          <p class="head">Dedicated </p>
          <p class="sub-head">Virtual Lab Session</p>
        </div>
      </div>
    </div>
    <div class="bottom row d-flex justify-content-center pt-5 px-md-5">
      <div class="col-sm-6 col-md-4 col-6 mb-3 mb-md-0 ">
        <img src="./assets/Group 5.png" alt="" class="second-sec-bottom-img" />
      </div>
      <div class="col-sm-6 col-md-4 col-6 mb-3 mb-md-0 ">
        <div class=""></div>
        <img src="./assets/Group6.png" alt="" class="second-sec-bottom-img" />
      </div>
      <div class="col-sm-12 col-md-4 col-12 mb-3 mb-md-0 ">
        <img src="./assets/Group 7.png" alt="" class="second-sec-bottom-img" />
      </div>
    </div>
  </div>
</section>

<section class="main-body-sec">
  <nav id="nav" class="navbar navbar-template navbar-light bg-white py-0 d-none d-md-block">
    <div class="container scrolling-sm">
      <ul class="d-flex justify-content-between align-items-center w-100 p-0 mb-0">
        <li class="active">
          <a href="#About">About</a>
        </li>

        <li>
          <a href="#Curriculum">Curriculum</a>
        </li>
        <li>
          <a href="#Projects">Projects</a>
        </li>
        <li>
          <a href="#Reviews">Reviews</a>
        </li>
        <li>
          <a href="#Career">Career Services</a>
        </li>
        <li>
          <a href="#Peer">Ebook section</a>
        </li>


        <li>
          <a href="#Admission">Admission</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="scrollspy py-md-5 py-3" id="About">
    <section class="">
      <div class="container">
        <div class="row mt-4 justify-content-between">
          <div class="col-md-8 col-12">
            <h3 class="mb-4">About Program</h3>
            <p class="min-font">
              Understand and use essential tools for handling files, directories, command-line environments, and documentation
              Operate running systems, including booting into different run levels, identifying processes, starting and stopping virtual machines, and controlling services
              Configure local storage using partitions and logical volumes
              Create and configure file systems and file system attributes, such as permissions, encryption, access control lists, and network file systems
              Deploy, configure, and maintain systems, including software installation, update, and core services
              Manage users and groups, including the use of a centralized directory for authentication
              Manage security, including basic firewall and SELinux configuration </p>
            <div class="about-program-card p-4">
              <h5 class="ms-3 mb-4 lightgreen">Key Highlights</h5>
              <div class="row">
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">Duration 90 hours</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">Live interacting learning</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">10+ projects and exercises</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">Course completion Certification</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">100% Job assistance program</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">Flexible Schedule</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">Recorded videos of classes</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">1:1 with Industry Mentors</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">Soft Skills Essential Training</p>
                </div>
                <div class="col-md-6 col-12 py-2 d-flex align-items-center">
                  <img class="balance-bp mx-2 mt-0" src="./assets/Ellipse 1.png" alt="" height="20px" />
                  <p class="mb-0 min-font fw-500">Access to Learning Management System</p>
                </div>
              </div>
            </div>
            <div class="program-adv mt-5">
              <h5 class="my-4 ps-2">Program Advantage</h5>
              <p class="lightgreen ps-2">
                On completion of this course, you will:
              </p>
              <ul>
                <li class="d-flex align-items-center">
                  <img src="./assets/Ellipse 1.png" alt="" height="20px" class="mx-2" />
                  <p>
                    Completion certificate from linux2cloud.
                  </p>
                </li>
                <li class="d-flex align-items-center">
                  <img src="./assets/Ellipse 1.png" alt="" height="20px" class="mx-2" />
                  <p>
                    Be in a position to clear the requisite certification exams
                    and land the best jobs.
                  </p>
                </li>
                <li class="d-flex align-items-center">
                  <img src="./assets/Ellipse 1.png" alt="" height="20px" class="mx-2" />
                  <p>
                    Hands on practical training from beginner to advanced level.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 d-md-block d-none">
            <div class="career-counselling-card mx-4">
              <div class="card-head">
                <p class="heading mb-0 text-start">Free Career Counselling</p>
                <p class="sub-heading">We are happy to help you 24/7</p>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <div class="mb-4">
                    <div class="mb-3">
                      <input type="text" name="con_name" class="form-control" placeholder="Name" required autocomplete="off" />
                    </div>
                    <div class="mb-3">
                      <input type="email" name="con_email" class="form-control" placeholder="Email" required autocomplete="off" />
                    </div>
                    <div class="mb-3">
                      <input type="number" name="con_number" class="form-control" placeholder="Mobile Number" required autocomplete="off" />
                    </div>
                    <div class="mb-3 pt-1">
                      <button type="submit" class="btn btn-blue w-100">Submit</button>
                    </div>
                  </div>
                  <div class="mb-0">
                    <p class="min-font mb-0">
                      By providing your contact details, you agree to our
                      <a href="#" class="terms">Terms of Use</a> &
                      <a href="#" class="policy">Privacy Policy</a>
                    </p>
                  </div>
                </form>
                <?php

                if (isset($_REQUEST['con_name'])) {

                  $con_name = htmlspecialchars($_REQUEST['con_name']);
                  $con_email = htmlspecialchars($_REQUEST['con_email']);
                  $con_number = $_REQUEST['con_number'];


                  try {
                    $query = "insert into career (con_name, con_email , con_number) values ('$con_name' , '$con_email' , '$con_number')";
                    $subscribe4 = mysqli_query($conn, $query);



                    if ($subscribe4) {

                      echo "<span class='text-white'>submitted successfuly.</span>";
                    } else {

                      echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
                    }
                  } catch (\Exception $e) {
                    printf(mysqli_error($conn));
                  }
                }

                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="career-sec py-5">
      <div class="container">
        <div class="career-sec-body" id="">
          <h3 class="mb-4">Career Transition</h3>
          <div class="row">
            <div class="col-12 col-md-6 career-transition-lt-card-container">

              <div class="career-transition-lt-card">
                <div class="px-md-4 px-2">

                  <div class="d-flex mb-md-2 mb-1 align-items-center">
                    <img src="./docs/Inkedheader.jpg" alt="" class="d-inline slider_img">
                    <div class="ms-1">
                      <h5 class="fw-bold name mb-0">Akshat Puri</h5>
                      <!-- <p class="details fs-small ">CEO , Pharma.co</p> -->

                    </div>
                  </div>
                  <p class="text-black">One of the best institutes i have studied in so far. A very big thank you to LINUX2CLOUD because of the learnings and confidence gained after completing my course i was able to clear my interview and bag a CTC of 20 plus LPA .</p>

                  <p class="text-black ">Detailed theory is followed by practical's and assignments for cementing the concept
                    Well prepared LABS provided for practicing the learnings .
                    Biggest plus you get additional complimentary sessions to prepare for your respective certifications at no additional cost .</p>
                  <!-- <div class="pt-3">
                    <h6 class="t-c">Software Engineer</h6>
                    <h6 class="t-c">To </h6>
                    <h6 class="t-c">Consultant Engineer</h6>
                  </div> -->
                </div>

              </div>

            </div>
            <div class="col-12 col-md-6 career-transition-card-container">
              <div class="career-transition-card">
                <img src="./assets/Stocks Growth.png" alt="" class="" /><span class="blue">59% Average Salary
                  Hike</span>
              </div>
              <div class="career-transition-card">
                <img src="./assets/Cash in Hand (1).png" alt="" class="" /><span class="green">20 LPA Highest
                  Salary</span>
              </div>
              <div class="career-transition-card">
                <img src="./assets/Salary female.png" alt="" class="" /><span class="yellow">700+ Career
                  Transitions</span>
              </div>
              <div class="career-transition-card">
                <img src="./assets/Handshake.png" alt="" class="" /><span class="red">100+ Hiring Partners</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-1"></div>
          <div class="col-md-7 col-12">
            <h5 class="ps-2 my-4">Who Can Apply for the Program?</h5>
            <ul class="">
              <li class="d-flex align-items-center mb-3">
                <img src="./assets/Ellipse 1.png" alt="" height="18px" class="balance-bp mx-2 mt-1" />
                <p class="mb-0 min-font fw-500">IT Operations Professionals</p>
              </li>
              <li class="d-flex align-items-center mb-3">
                <img src="./assets/Ellipse 1.png" alt="" height="18px" class="balance-bp mx-2 mt-1" />
                <p class="mb-0 min-font fw-500">Network Administrators</p>
              </li>
              <li class="d-flex align-items-center mb-3">
                <img src="./assets/Ellipse 1.png" alt="" height="18px" class="balance-bp mx-2 mt-1" />
                <p class="mb-0 min-font fw-500">DevOps Consultants</p>
              </li>
              <li class="d-flex align-items-center mb-3">
                <img src="./assets/Ellipse 1.png" alt="" height="18px" class="balance-bp mx-2 mt-1" />
                <p class="mb-0 min-font fw-500">Systems, Network, and Cloud Administrators</p>
              </li>
              <li class="d-flex align-items-center mb-3">
                <img src="./assets/Ellipse 1.png" alt="" height="18px" class="balance-bp mx-2 mt-1" />
                <p class="mb-0 min-font fw-500">Testing, Software Automation, and Security Professionals</p>
              </li>
              <li class="d-flex align-items-center mb-3">
                <img src="./assets/Ellipse 1.png" alt="" height="18px" class="balance-bp mx-2 mt-1" />
                <p class="mb-0 min-font fw-500">
                  Non-IT Professionals aiming to build a career in the cloud
                  domain
                </p>
              </li>
              <li class="d-flex align-items-center mb-3">
                <img src="./assets/Ellipse 1.png" alt="" height="18px" class="balance-bp mx-2 mt-1" />
                <p class="mb-0 min-font fw-500">
                  Freshers who are graduated can apply for the program as well
                </p>
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-12 lady-img-first-bg">
            <div class="lady-img-second-bg"></div>
            <img src="./assets/broo.png" alt="" class="lady-img " />
          </div>
        </div>
      </div>
    </section>
  </section>

  <section class="scrollspy" id="Curriculum">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="mb-2"><b>Curriculum</b></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="master-curriculum-minimum-height">
            <div id="master-curriculum-accordion">
              <div class="card ip-vk-cc-lc">
                <div class="card-header collapsed curriculum-topics" data-coursid="" id="master-curriculum-heading2" data-toggle="collapse" data-target="#master-curriculum-collapse2" aria-expanded="true" aria-controls="master-curriculum-collapse2">
                  <h3 class="master-curriculum-accordion-heading">
                    Red Hat System Administration (RHCSA)
                  </h3>
                  <p class="master-curriculum-accordion-headi-detail mb-0">
                    <span class="curriculum-time">48 Hours</span>
                    <span class="curriculum-module">24 Module</span>
                  </p>
                </div>
                <div id="master-curriculum-collapse2" class="collapse curriculum-answer" aria-labelledby="master-curriculum-heading2" data-parent="#master-curriculum-accordion">
                  <div class="card-body card-body-vk-ip card-body-">
                    <h6><b>Outline for this course</b></h6>
                    <p>
                      <strong>Module 01</strong>&nbsp;– Introduction to
                      RHEL<br />
                      <span><i class="fas fa-circle"></i>Kernel</span><br />
                      <span><i class="fas fa-circle"></i>Shell</span><br />
                      <span><i class="fas fa-circle"></i>What is Linux/Unix?</span><br />

                      <strong>Module 02</strong>&nbsp;– Installation of LINUX<br />
                      <span><i class="fas fa-circle"></i>System requirements</span><br />
                      <span><i class="fas fa-circle"></i>Types of
                        Installation</span><br />
                      <span><i class="fas fa-circle"></i>Installation steps</span><br />

                      <strong>Module 03</strong>&nbsp;– Accessing the Command
                      Line<br />
                      <span><i class="fas fa-circle"></i>Introduction of CLI, GUI &
                        VC</span><br />
                      <span><i class="fas fa-circle"></i>Introduction to Bash
                        Shell</span><br />
                      <span><i class="fas fa-circle"></i>Introduction to
                        Terminal</span><br />

                      <strong>Module 04</strong>&nbsp;– Managing User &
                      Groups<br />
                      <span><i class="fas fa-circle"></i>Users</span><br />
                      <span><i class="fas fa-circle"></i>Groups</span><br />

                      <strong>Module 05</strong>&nbsp;– Managing Permissions In
                      Linux<br />
                      <span><i class="fas fa-circle"></i>File Permissions</span><br />
                      <span><i class="fas fa-circle"></i>Special Permissions</span><br />

                      <strong>Module 06</strong>&nbsp;– Managing Network<br />
                      <span><i class="fas fa-circle"></i>TCP/IP Network Model</span><br />
                      <span><i class="fas fa-circle"></i>Network Commands</span><br />

                      <strong>Module 07</strong>&nbsp;– SSH (Secure Shell)<br />
                      <span><i class="fas fa-circle"></i>Openssh</span><br />
                      <span><i class="fas fa-circle"></i>Key-based
                        authentication</span><br />

                      <strong>Module 08</strong>&nbsp;– Package Management<br />
                      <span><i class="fas fa-circle"></i>RPM Package Manager</span><br />
                      <span><i class="fas fa-circle"></i>Yum Package Manager</span><br />

                      <strong>Module 09</strong>&nbsp;– Controlling Services &
                      Daemons<br />
                      <span><i class="fas fa-circle"></i>Features of Systemd</span><br />
                      <span><i class="fas fa-circle"></i>Using Service Unit</span><br />

                      <strong>Module 10</strong>&nbsp;– Managing Linux
                      Processes<br />
                      <span><i class="fas fa-circle"></i>Parent and Fork
                        Process</span><br />
                      <span><i class="fas fa-circle"></i>Process State</span><br />

                      <strong>Module 11</strong>&nbsp;– Analyzing & Storing
                      Logs<br />
                      <span><i class="fas fa-circle"></i>Log Priority</span><br />
                      <span><i class="fas fa-circle"></i>System-journald</span><br />

                      <strong>Module 12</strong>&nbsp;– Analyzing Servers &
                      Getting Support<br />
                      <span><i class="fas fa-circle"></i>Enable Web
                        console-Cockpit</span><br />
                      <span><i class="fas fa-circle"></i>RedHat Insight</span><br />

                      <strong>Module 13</strong>&nbsp;– Managing Standard
                      Partitions<br />
                      <span><i class="fas fa-circle"></i>Partition Scheme as</span><br />
                      <span><i class="fas fa-circle"></i>Disk Naming</span><br />

                      <strong>Module 14</strong>&nbsp;– Managing Logical
                      Volumes<br />
                      <span><i class="fas fa-circle"></i>Logical Volume
                        Management(LVM)</span><br />

                      <strong>Module 15</strong>&nbsp;– Selinux - Security
                      Enhanced Linux<br />
                      <span><i class="fas fa-circle"></i>Introduction of
                        SELinux</span><br />
                      <span><i class="fas fa-circle"></i>Managing File’s Context
                        level</span><br />
                      <span><i class="fas fa-circle"></i></span><br />

                      <strong>Module 16</strong>&nbsp;– FireWalld - Managing
                      Network Security<br />
                      <span><i class="fas fa-circle"></i>Zones in Firewalld</span><br />
                      <span><i class="fas fa-circle"></i>Helpful commands of
                        IPtables</span><br />

                      <strong>Module 17</strong>&nbsp;– TroubleShooting & Boot
                      Process<br />
                      <span><i class="fas fa-circle"></i>GRUB2 – Grand Unified Boot
                        loader</span><br />
                      <span><i class="fas fa-circle"></i>Breaking Root
                        .Password</span><br />

                      <strong>Module 18</strong>&nbsp;– Task Scheduling<br />
                      <span><i class="fas fa-circle"></i>Schedule Job Using
                        “at”</span><br />
                      <span><i class="fas fa-circle"></i>Schedule Job using
                        “crontab”</span><br />

                      <strong>Module 19</strong>&nbsp;– Accessing Network
                      Attached Storage<br />
                      <span><i class="fas fa-circle"></i>Creating NFS Server</span><br />
                      <span><i class="fas fa-circle"></i>Creating NFS Client</span><br />

                      <strong>Module 20</strong>&nbsp;– Kickstart &
                      Virtualization<br />
                      <span><i class="fas fa-circle"></i>Steps involve in
                        Kickstart</span><br />
                      <span><i class="fas fa-circle"></i>Virtualization</span><br />

                      <strong>Module 21</strong>&nbsp;– Improve Command Line
                      Productivity<br />
                      <span><i class="fas fa-circle"></i>Use of Find</span><br />
                      <span><i class="fas fa-circle"></i>Use of Grep</span><br>

                      <strong>Module 22</strong>&nbsp;– Task Scheduling<br />
                      <span><i class="fas fa-circle"></i>Schedule Job Using “at”</span><br />
                      <span><i class="fas fa-circle"></i>Managing Temporary File”</span><br>

                      <strong>Module 23</strong>&nbsp;– Accessing Network Attached Storage<br />
                      <span><i class="fas fa-circle"></i>Creating NFS Server</span><br />
                      <span><i class="fas fa-circle"></i>Creating NFS Client</span><br />

                      <strong>Module 24</strong>&nbsp;– Kickstart & Virtualization<br />
                      <span><i class="fas fa-circle"></i>Steps involve in Kickstart</span><br />
                      <span><i class="fas fa-circle"></i>Virtualization</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header collapsed curriculum-topics" data-coursid="" id="master-curriculum-heading3" data-toggle="collapse" data-target="#master-curriculum-collapse3" aria-expanded="true" aria-controls="master-curriculum-collapse3">
                  <h3 class="master-curriculum-accordion-heading">
                    Red Hat Certified Engineer (RHCE) RHEL 8
                  </h3>
                  <p class="master-curriculum-accordion-headi-detail mb-0">
                    <span class="curriculum-time">32 Hours</span>
                    <span class="curriculum-module">12 Module</span>
                  </p>
                </div>
                <div id="master-curriculum-collapse3" class="collapse curriculum-answer" aria-labelledby="master-curriculum-heading3" data-parent="#master-curriculum-accordion">
                  <div class="card-body card-body-vk-ip card-body-">
                    <h6><b>Outline for this course</b></h6>
                    <p>
                      <strong>Module 01</strong>&nbsp;– Introduction of
                      Ansible<br />
                      <span><i class="fas fa-circle"></i>Admin Task</span><br />
                      <span><i class="fas fa-circle"></i>What is Automation</span><br />

                      <strong>Module 02</strong>&nbsp;– Deploying by Ansible<br />
                      <span><i class="fas fa-circle"></i>Ansible Inventory</span><br />
                      <span><i class="fas fa-circle"></i>Overriding the Location of
                        the Inventory</span><br />

                      <strong>Module 03</strong>&nbsp;– Ansible Ad-Hoc<br />
                      <span><i class="fas fa-circle"></i>General Module
                        Category</span><br />
                      <span><i class="fas fa-circle"></i>Ping Module</span><br />

                      <strong>Module 04</strong>&nbsp;– Implementing Playbook<br />
                      <span><i class="fas fa-circle"></i>Playbook vs AdHOc</span><br />
                      <span><i class="fas fa-circle"></i>Managing Playbooks</span><br />

                      <strong>Module 05</strong>&nbsp;– Variables in Ansible<br />
                      <span><i class="fas fa-circle"></i>Introduction</span><br />
                      <span><i class="fas fa-circle"></i>Naming Variable</span><br />

                      <strong>Module 06</strong>&nbsp;– Ansible Vault<br />
                      <span><i class="fas fa-circle"></i>Commands of Ansible
                        Vault</span><br />
                      <span><i class="fas fa-circle"></i>Ansible Vault and
                        Playbook</span><br />

                      <strong>Module 07</strong>&nbsp;– Variables in Ansible<br />
                      <span><i class="fas fa-circle"></i>UsingAnsible Facts</span><br />
                      <span><i class="fas fa-circle"></i>Older fact Approach</span><br />

                      <strong>Module 08</strong>&nbsp;– Implementing Task
                      Control<br />
                      <span><i class="fas fa-circle"></i>Loops in Playbook</span><br />
                      <span><i class="fas fa-circle"></i>Loop Sample</span><br />

                      <strong>Module 09</strong>&nbsp;– Jinja Templete<br />
                      <span><i class="fas fa-circle"></i>Magic Variable</span><br />
                      <span><i class="fas fa-circle"></i>Loops in JInja2</span><br />

                      <strong>Module 10</strong>&nbsp;– Managing Large
                      Projects<br />
                      <span><i class="fas fa-circle"></i>Managing inventory</span><br />
                      <span><i class="fas fa-circle"></i>Selecting Host and
                        Patterning</span><br />

                      <strong>Module 11</strong>&nbsp;– Implementing Roles<br />
                      <span><i class="fas fa-circle"></i>Path for Roles</span><br />
                      <span><i class="fas fa-circle"></i>Creating Roles</span><br />

                      <strong>Module 12</strong>&nbsp;– Troubleshooting &
                      Automating Admin Task<br />
                      <span><i class="fas fa-circle"></i>Troubleshooting
                        Commands</span><br />
                      <span><i class="fas fa-circle"></i>Automating Admin
                        Task</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        $select = mysqli_query($conn, "select * from date_table order by id DESC Limit 1");
        $inc = 0;
        while ($item = mysqli_fetch_array($select)) {
          $inc++
        ?>
          <div class="col-lg-4 d-none d-lg-block">
            <div class="career-counselling-card program-card mx-4">
              <div class="card-head">
                <p class="heading mb-0 text-start">Program starts by</p>
              </div>
              <div class="card-body px-0">
                <div class="line">
                  <p class="date t-c"><?php echo $item['date']; ?></p>
                </div>
                <div class="line">
                </div>
                <div class="line">
                  <p class=" t-c"><?php echo $item['month']; ?></p>
                  <p class="time t-c">Timing : <?php echo $item['time']; ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

      <div class="start-application-card my-5">
        <h5 class="mb-3">Interested in This Program? Secure your spot now.</h5>
        <p class="mb-2 min-font fw-normal">
          The application is free and takes only 1 minutes to complete.
        </p>
        <form method="POST" action="">
          <div class="row py-2">
            <div class="col">
              <input type="email" name="c_email1" id="c_email1" class="form-control" placeholder="Email" required autocomplete="off" />
            </div>
            <div class="input-group col">
              <div class="input-group-text">+91</div>
              <input type="number" style="border-radius: 0 7px 7px 0 !important ;" name="c_number1" class="form-control" id="specificSizeInputGroupUsername" placeholder="Mobile Number" required autocomplete="off" />
            </div>
            <div class="col">
              <button type="submit" class="btn w-100">Get free consultation</button>
            </div>
          </div>
          <div>
            <div class="msg_reply"></div>
          </div>
        </form>

        <?php

        if (isset($_REQUEST['c_email1'])) {

          $c_email = htmlspecialchars($_REQUEST['c_email1']);

          $c_number = $_REQUEST['c_number1'];


          try {
            $query = "insert into consultation (c_email , c_number) values ('$c_email' , '$c_number')";
            $subscribe3 = mysqli_query($conn, $query);



            if ($subscribe3) {

              echo "<span class='text-white'>submitted successfuly.</span>";
            } else {

              echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
            }
          } catch (\Exception $e) {
            printf(mysqli_error($conn));
          }
        }

        ?>



      </div>

      <?php //include('include/applicationform.php') 
      ?>
    </div>
  </section>

  <section class="scrollspy py-md-5 py-4" id="Projects">
    <div class="container">
      <h3 class="mb-4">Projects</h3>
      <p class="min2-font">
        The gaol of the project is to enhance the security and performance of linux server by implementing best practices recommended by RHCSA (Red Hat Certified System Administrator) and RHCE ( Red Hat Certified Engineer ). This server will host various services such as web, email, and database. The project will focus on following areas:
      </p>
      <div class="pt-5">
        <div class="project-body">
          <div class="beginner-slider-container d-flex justify-content-evenly flex-wrap">
            <div class="project-card">
              <div class="project-card-body">
                <h5 class="heading my-4">File System Security</h5>
                <p class="details">
                  Configuring file permissions and ownership to prevent unauthorized access, and implmenting backup and disaster recovery plans
                </p>
              </div>
              <a href="#" class="btn w-100">View</a>
            </div>
            <div class="project-card">
              <div class="project-card-body">
                <h5 class="heading my-4">Automation(Ansible)</h5>
                <p class="details">
                  "Unlock the power of automation with our comprehensive ansible and automation training for Linux systems. Learn to write efficent playbook and program to automate repetitive tasks.""
                </p>
              </div>
              <a href="#" class="btn w-100">View</a>
            </div>
            <div class="project-card">
              <div class="project-card-body">
                <h5 class="heading my-4">Virtualization and Containers</h5>
                <p class="details">
                  "Experience the future of IT and Virtualization and Containers in linux: Optimize Resources and Reduce Costs"
                </p>
              </div>
              <a href="#" class="btn w-100">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scrollspy" id="Reviews">
    <div class="container">
      <h3 class="my-4 my-md-5">Reviews</h3>
      <div class="d-flex justify-content-evenly flex-wrap mb-md-5 mb-4">
        <div class="video-container">
          <iframe width="300" height="300" src="https://www.youtube.com/embed/ZPYZXpLrxlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-container my-md-0 my-2">
          <iframe width="300" height="300" src="https://www.youtube.com/embed/DfrUAsD2FG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-container">
          <iframe width="300" height="300" src="https://www.youtube.com/embed/Tt0a1qJGzkg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="review-slider-container">
        <div class="swiper mySwiper review-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide review-card-container">
              <div class="review-card">
                <div class="container">
                  <div class="row px-2 align-items-center">
                    <div class="review-card-img col-3 pe-0 ">
                      <img src="./assets/Vikas.png" alt="" />
                    </div>
                    <div class="col-9 px-0">
                      <p class="heading mb-0 text-start">Vikas Pandey</p>
                      <p class="sub-heading mb-0 text-start"></p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="details">
                    I really enjoyed and learnt a great deal in the training sessions of Course.so. I joined the
                    institute on my friend's recommendation and I'm really glad I did. It proved to be a deal-breaker
                    for me and finally helped me switch my career from a Support background to the DevOps field enabling
                    me to join a Microsoft partner company, Hanu Softwares as a Sr. Cloud Engineer.
                  </p>
                </div>

              </div>
            </div>
            <div class="swiper-slide review-card-container">
              <div class="review-card">
                <div class="container">
                  <div class="row px-2 align-items-center">
                    <div class="review-card-img col-3 pe-0">
                      <img src="./assets/Siva.png" alt="" />
                    </div>
                    <div class="col-8 ps-0">
                      <p class="heading mb-0 text-start">Siva GM</p>
                      <p class="sub-heading mb-0 text-start"></p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="details">
                    Course.so is among a very few training institutes that deliver Instructor led online OpenShift
                    course at an affordable cost. Training sessions are recorded and made available to the students.
                    Chat sessions are open throughout the duration of the course to interact with the trainer. Their
                    trainer is a subject matter expert. All the concepts are very well explained, perfect materials,
                    assessments and pratice papers to prepare for the exam. Was able to clear the exam on my first
                    attempt. Labs from Course.so are also a great addon which is included for free with the course.
                    Course.so team are very helpful right from the time you sign up till the course completion or
                    certification. Recommended for anyone aspiring to get certified in OpenShift.
                  </p>
                </div>

              </div>
            </div>
            <div class="swiper-slide review-card-container">
              <div class="review-card">
                <div class="container">
                  <div class="row px-2 align-items-center">
                    <div class="review-card-img col-3 pe-0">
                      <img src="./assets/Nikhil.png" alt="" />
                    </div>
                    <div class="col-8 ps-0">
                      <p class="heading mb-0 text-start">Nikhil Kumar</p>
                      <p class="sub-heading mb-0 text-start"></p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="details">
                    Hi Guys, I would like to share my personal experience for Course.so, which is one of the best
                    training institute for Devops courses, I had enrolled for Redhat admin and Ansible along with the
                    Terraform which is an Iac tool and these training courses enabled my potential and helped me to
                    switch my career from a Support background to a Devops expert.

                    I would like to highly recommend for those working professional who wants to make their career in
                    Devops.

                    You will get lots of assignment that helps you to build up you practical knowledge.

                    5Stars for Trainers, Study Material, Teaching techniques.
                  </p>
                </div>

              </div>
            </div>
            <div class="swiper-slide review-card-container">
              <div class="review-card">
                <div class="container">
                  <div class="row px-2 align-items-center">
                    <div class="review-card-img col-3 pe-0">
                      <img src="./assets/Kavinder.png" alt="" />
                    </div>
                    <div class="col-8 ps-0">
                      <p class="heading mb-0 text-start">Kavinder Singh</p>
                      <p class="sub-heading mb-0 text-start"></p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="details">
                    I have completed RHCSA course from here. My experience of learning this course was fantastic and the
                    teaching faculty is really good .
                  </p>
                </div>

              </div>
            </div>
            <div class="swiper-slide review-card-container">
              <div class="review-card">
                <div class="container">
                  <div class="row px-2 align-items-center">
                    <div class="review-card-img col-3 pe-0">
                      <img src="./assets/Akash.png" alt="" />
                    </div>
                    <div class="col-8 ps-0">
                      <p class="heading mb-0 text-start">Akash Sharma</p>
                      <p class="sub-heading mb-0 text-start"></p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="details">
                    It was great experience with Course.so. They have experienced trainers.
                    Trainer's are very polite and professional. Good study material provided by them. If you want to
                    learn DevOps, Course.so is the correct institutions for that.
                    I would strongly recommend.
                    Thanks Course.so.
                  </p>
                </div>

              </div>
            </div>
            <div class="swiper-slide review-card-container">
              <div class="review-card">
                <div class="container">
                  <div class="row px-2 align-items-center">
                    <div class="review-card-img col-3 pe-0">
                      <img src="./assets/sourabh.png" alt="" />
                    </div>
                    <div class="col-8 ps-0">
                      <p class="heading mb-0 text-start">Sourabh saroha</p>
                      <p class="sub-heading mb-0 text-start"></p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="details">
                    I enrolled my self for RedHat exam with Course.so. The training experience was awesome and the
                    trainers have deep knowledge of every topic and concepts.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <i class="fas fa-chevron-right "></i>
        <i class="fas fa-chevron-left "></i>
      </div>
    </div>
  </section>

  <section class="scrollspy" id="Career">
    <div class="container">
      <div class="our_alumni py-md-5 py-4">
        <h3 class="">Our Alumni Works At</h3>
        <div class="alumni-img-container container-fluid">
          <div class="row">
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/adci.png" alt="" class="img-fluid">
            </div>

            <!-- <div class="col-6 col-md-2">
              <img src="./assets/alumini/Adobe.png" alt="" class="img-fluid">
            </div> -->

            <div class="col-6 col-md-2">
              <img src="./assets/alumini/amazon.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/american-tower-corporate.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/bluestacks.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/brio.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/litera.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/cipl.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/dxc.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/ericsson.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/genpact.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/hcl.png" alt="" class="img-fluid">
            </div>
            <!-- <div class="col-6 col-md-2">
              <img src="./assets/alumini/ibm.png" alt="" class="img-fluid">
            </div> -->
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/infosys.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/kyndryl.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/lenovo.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/capeng.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/loblaw.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/maas.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/majorel.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/theorem.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/optum.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/zam.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/rack.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/sap.png" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/sdipl.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-6 col-md-2">
              <img src="./assets/alumini/stc.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scrollspy" id="Peer">
    <div class="container">
      <div class="head">
        <h3 class="mb-4">Ebook section</h3>
      </div>
      <div class="peer-learning-body py-4">
        <div class="row justify-content-between px-md-5 ">
          <div class="col-md-6 col-12 order-2 order-md-1 d-flex  justify-content-start align-items-center">
            <div class="d-flex flex-column">
              <p class="ebook-heading mb-4">Which is <br> better Cloud</p>
              <div class="star-container d-flex mb-4">
                <img src="./assets/Christmas Star.png" alt="" class="img-fluid">
                <img src="./assets/Christmas Star.png" alt="" class="img-fluid">
                <img src="./assets/Christmas Star.png" alt="" class="img-fluid">
                <img src="./assets/Christmas Star.png" alt="" class="img-fluid">
                <img src="./assets/Christmas Star.png" alt="" class="img-fluid">
              </div>
              <p class="details mb-3">Via Course.so PeerChat, you can interact with <br> your peers across all classes
                and batches and <br> even our alumni. Collaborate on projects, share <br> job referrals & interview
                experiences, </p>
              <p class="text-grey ">Free</p>
              <!-- <a href="#" class="btn ebook-btn">Download</a> -->
            </div>
          </div>
          <div class="col-md-5 col-12 order-1 order-md-2 peer-img d-flex">
            <div class="mx-auto">
              <img src="./assets/Group105.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scrollspy py-md-5 py-4" id="Admission">
    <div class="container">
      <h3 class="mb-4">Blogs</h3>
      <p class="mb-md-5 mb-4 min2-font">
        The application process consists of three simple steps. An offer of
        admission will be made to selected candidates based on the feedback from
        the interview panel. The selected candidates will be notified over email
        and phone, and they can block their seats through the payment of the
        admission fee.
      </p>
      <!-- <div class="d-flex justify-content-evenly flex-wrap py-md-5 py-4">
        <div class="admission-procedure-card">
          <div class="admission-procedure-card-img">
            <img src="./assets/Paper2.png" alt="" class="" />
          </div>
          <p class="heading">Submit Application</p>
          <p class="sub-heading">
            Tell us a bit about yourself and why you want to join this program
          </p>
        </div>
        <div class="admission-procedure-card">
          <div class="admission-procedure-card-img">
            <img src="./assets/Paper4.png" alt="" class="" />
          </div>
          <p class="heading">Application Review</p>
          <p class="sub-heading">
            An admission panel will shortlist candidates based on their
            application
          </p>
        </div>
        <div class="admission-procedure-card">
          <div class="admission-procedure-card-img">
            <img src="./assets/Embed.png" alt="" class="" />
          </div>
          <p class="heading">Application Review</p>
          <p class="sub-heading">
            Selected candidates will be notified within 1–2 weeks
          </p>
        </div>
      </div> -->

      <div class="row mx-0 mb-4">
        <div class="col-md-3 col-sm-6 col-6">
          <div class="blog-card">
            <div class="blog-card-img">
              <img src="./assets/blogs/b1.jpg" alt="">
            </div>
            <div class="blog-card-details">
              <h5>Red Hat Traning for unlimited possibility and career opportunities</h5>
              <p>Today, the IT industry is advancing at an aggressive pace and is always on the lookout for talented and decidedly skilled employees...</p>
              <a href="https://linux2cloud.com/redhat-training-for-unlimited-possibilities-and-career-opportunities/">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6">
          <div class="blog-card">
            <div class="blog-card-img">
              <img src="./assets/blogs/b2.jpg" alt="">
            </div>
            <div class="blog-card-details">
              <h5>Top 8 Reasons Why You Should Choose Linux?</h5>
              <p>Linux, the open-source operating system is witnessing its prime success in 2021. The OS (Operating System) was predominantly used by programmers, but now it’s getting more popular among everyday users across the globe. If you are looking for a better OS alternative, then Linux might be the perfect solution</p>
              <a href="https://linux2cloud.com/top-8-reasons-why-you-should-choose-linux/">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6">
          <div class="blog-card">
            <div class="blog-card-img">
              <img src="./assets/blogs/b3.jpg" alt="">
            </div>
            <div class="blog-card-details">
              <h5>Things You Didn't Know About br Ansible?</h5>
              <p>The growing buzz about Ansible in recent years is all for the right reasons. This software automation engine came out of...</p>
              <a href="https://linux2cloud.com/things-you-didnt-know-about-ansible/">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6">
          <div class="blog-card">
            <div class="blog-card-img">
              <img src="./assets/blogs/b4.jpg" alt="">
            </div>
            <div class="blog-card-details">
              <h5>What Jobs Are Available After Getting Red hat RHCA And RHCE Certification?</h5>
              <p>Red Hat certification offers several professional certifications based on its software products such as operating systems, storage, and cloud-based solutions, and visualization...</p>
              <a href="https://linux2cloud.com/what-jobs-are-available-after-getting-red-hat-rhcsa-and-rhce-certification/">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="pg-programe-fee-section">
      <div class="container">
        <h2>Certificate Gallery</h2>
        <div class="certificate-slider-container">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./assets/certificates/Azure-Certificate-1_11zon.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Azure-Certificate-2_11zon.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Azure-Certificate-3_11zon.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Azure-Certificate_11zon (1).jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1 (1).jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-1 (1).jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-1-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-2.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-3.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-4.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-5.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-6.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1-7.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-2 (1).jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-2-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Certificates-2 (2).jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/pawan-kumar-b3f89a8f-8173-4c19-94b6-044b45890983-certificate-2-1-1-1-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Red_Hat_Certificate_RHCSA-rhel_Aparna_Sharma-1-1-1-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Red_Hat_Certificate_RHCSA-rhel_Kavinder_Singh_page-0001-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Satellite-Certificate.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design-1.png" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design-2.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design-2_11zon.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design-4.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design-4.png" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design-5.jpg" alt="" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="./assets/certificates/Untitled-design.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <i class="fas fa-chevron-right "></i>
          <i class="fas fa-chevron-left "></i>
        </div>
      </div>
    </section>
    </div>
    </div>
  </section>


</section>


<section class="scrollspy" id="FAQs">
  <section id="master-faq-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2>Frequently Asked <b>Questions</b></h2>
          <div id="master-faq-accordion" class="master-curriculum-minimum-height master-curriculum-maximum-height">
            <div class="card">
              <h3 class="card-header curriculum-topics show">
                What is the training Duration for RHCE Training?
              </h3>
              <div id="master-faq-collapse1" class="curriculum-answer show">
                <div class="card-body">
                  <p>
                    The training duration for RHCSA + RHCE is 90 hours.
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <h3 class="card-header curriculum-topics">
                Do I study in classroom or online?
              </h3>
              <div id="master-faq-collapse2" class="curriculum-answer">
                <div class="card-body">
                  <p>
                    The Training is available live online by a certified instructor
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <h3 class="card-header curriculum-topics">
                What if I miss a session?
              </h3>
              <div id="master-faq-collapse3" class="curriculum-answer">
                <div class="card-body">
                  <p>
                    All our sessions are recorded, the recordings our uploaded to our student portal from where you can access it. The recordings are available for lifetime on the student portal.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="start-application-card my-5">
        <h5 class="mb-3">Interested in This Program? Secure your spot now.</h5>
        <p class="mb-2 min-font fw-normal">
          The application is free and takes only 1 minutes to complete.
        </p>
        <form method="POST" action="">
          <div class="row py-2">
            <div class="col">
              <input type="email" name="c_email" id="c_email" class="form-control" placeholder="Email" required autocomplete="off" />
            </div>
            <div class="input-group col">
              <div class="input-group-text">+91</div>
              <input type="number" style="border-radius: 0 7px 7px 0 !important ;" name="c_number" class="form-control" id="c_number" placeholder="Mobile Number" required autocomplete="off" />
            </div>
            <div class="col">
              <button type="submit" class="btn w-100">Get free consultation</button>
            </div>
          </div>
          <div>
            <div class="msg_reply"></div>
          </div>
        </form>

        <?php

        if (isset($_REQUEST['c_email'])) {

          $c_email = htmlspecialchars($_REQUEST['c_email']);

          $c_number = $_REQUEST['c_number'];


          try {
            $query = "insert into consultation (c_email , c_number) values ('$c_email' , '$c_number')";
            $subscribe3 = mysqli_query($conn, $query);



            if ($subscribe3) {

              echo "<span class='text-white'>submitted successfuly.</span>";
            } else {

              echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
            }
          } catch (\Exception $e) {
            printf(mysqli_error($conn));
          }
        }

        ?>

      </div>
      <?php // include('include/applicationform.php') 
      ?>
    </div>
  </section>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content form1">
      <div class="modal-header position-relative p-0 border-0">
        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="join-us-card" style="">
          <h5 class="mb-3">Upskill for Your Dream Job</h5>
          <form class="contact-form" id="form-contact" method="POST" action="">
            <div class=" mb-4">
              <div class="mb-3">
                <input type="text" name="name0" class="form-control" placeholder="Full Name" required autocomplete="off" id="name" />
              </div>
              <div class="mb-3">
                <input type="email" name="email0" class="form-control" placeholder="Email" required autocomplete="off" id="email" />
              </div>
              <div class="mb-3">
                <input type="number" name="number0" class="form-control" placeholder="Mobile Number" required autocomplete="off" id="number" />
              </div>
              <div class="mb-3">
                <input type="text" name="city0" class="form-control" placeholder="City" required autocomplete="off" id="city" />
              </div>
              <div class="mb-3 pt-1">
                <button type="submit" class="btn w-100">Submit</button>
              </div>
            </div>
            <div class="mb-2">
              <p class="mb-0" style="font-size: 15px;">
                By providing your contact details, you agree to our
                <a href="#" class="terms">Terms of Use</a> &
                <a href="#" class="policy">Privacy Policy</a>
              </p>
            </div>
            <div class="msg_reply"></div>
          </form>

          <?php

          if (isset($_REQUEST['number0'])) {
            $name0 = htmlspecialchars($_REQUEST['name0']);

            $email0 = htmlspecialchars($_REQUEST['email0']);

            $number0 = $_REQUEST['number0'];

            $city0 = $_REQUEST['city0'];


            try {
              $query = "insert into contact (name,email,number,city) values ('$name0','$email0' , '$number0' , '$city0')";
              $subscribe = mysqli_query($conn, $query);



              if ($subscribe) {

                echo "<span class='text-white'>submitted successfuly.</span>";
              } else {

                echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
              }
            } catch (\Exception $e) {
              printf(mysqli_error($conn));
            }
          }

          ?>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog  ">
    <div class="modal-content form1">
      <div class="modal-header position-relative p-0 border-0">
        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="join-us-card" style="">
          <h5 class="mb-3">Hire Form</h5>
          <form>
            <div class="mx-0  mb-4">
              <div class="mb-3">
                <input type="text" name="a_name" class="form-control" placeholder="Name" />
              </div>
              <div class="mb-3">
                <input type="email" name="a_email" class="form-control" placeholder="Email" />
              </div>
              <div class="mb-3">
                <input type="number" name="a_number" class="form-control" placeholder="Phone Number" />
              </div>
              <div class="mb-3">
                <input type="text" name="a_company" class="form-control" placeholder="Company Name" />
              </div>
              <div class="mb-3">
                <input type="text" name="a_role" class="form-control" placeholder="Role you Want" />
              </div>
              <div class="mb-3">
                <input type="text" name="a_experience" class="form-control" placeholder="Years of Experience" />
              </div>
              <div class="mb-3">
                <input type="text" name="a_city" class="form-control" placeholder="City of Job" />
              </div>
              <div class="mb-3 pt-1">
                <button type="submit" class="btn w-100">Submit</button>
              </div>
            </div>
            <div class="mb-2">
              <p class="mb-0" style="font-size: 15px;">
                By providing your contact details, you agree to our
                <a href="#" class="terms">Terms of Use</a> &
                <a href="#" class="policy">Privacy Policy</a>
              </p>
            </div>
          </form>
          <?php

          if (isset($_REQUEST['a_name'])) {

            $a_name = htmlspecialchars($_REQUEST['a_name']);
            $a_email = htmlspecialchars($_REQUEST['a_email']);
            $a_company = htmlspecialchars($_REQUEST['a_company']);
            $a_city = htmlspecialchars($_REQUEST['a_city']);
            $a_role = htmlspecialchars($_REQUEST['a_role']);
            $a_experience = htmlspecialchars($_REQUEST['a_experience']);

            $a_number = $_REQUEST['a_number'];


            try {
              $query = "insert into hire_form (a_name,a_email,a_number,a_company,a_city,a_role,a_experience) values ('$a_name','$a_email','$a_number','$a_company','$a_city','$a_role','$a_experience' )";
              $subscribe05 = mysqli_query($conn, $query);



              if ($subscribe05) {

                echo "<span class='text-white'>submitted successfuly.</span>";
              } else {

                echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
              }
            } catch (\Exception $e) {
              printf(mysqli_error($conn));
            }
          }

          ?>

        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog  ">
    <div class="modal-content form1">
      <div class="modal-header position-relative p-0 border-0">
        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="join-us-card" style="">
          <h5 class="mb-3">Coperate Training Form</h5>
          <form>
            <div class="mx-0  mb-4">
              <div class="mb-3">
                <input type="text" name="ct_name" class="form-control" placeholder="Name" />
              </div>
              <div class="mb-3">
                <input type="email" name="ct_email" class="form-control" placeholder="Email" />
              </div>
              <div class="mb-3">
                <input type="number" name="ct_number" class="form-control" placeholder="Phone Number" />
              </div>
              <div class="mb-3">
                <input type="text" name="ct_company" class="form-control" placeholder="Company Name" />
              </div>
              <div class="mb-3">
                <input type="text" name="ct_technology" class="form-control" placeholder="Technology you Need to Training" />
              </div>
              <div class="mb-3">
                <input type="text" name="ct_company_loc" class="form-control" placeholder="Company Location" />
              </div>
              <div class="mb-3 pt-1">
                <button type="submit" name="submit" class="btn w-100">Submit</button>
              </div>
              
            </div>
            <div class="mb-2">
              <p class="mb-0" style="font-size: 15px;">
                By providing your contact details, you agree to our
                <a href="#" class="terms">Terms of Use</a> &
                <a href="#" class="policy">Privacy Policy</a>
              </p>
            </div>
          </form>
          <?php

          if (isset($_REQUEST['ct_name'])) {

            $ct_name = htmlspecialchars($_REQUEST['ct_name']);
            $ct_email = htmlspecialchars($_REQUEST['ct_email']);
            $ct_company = htmlspecialchars($_REQUEST['ct_company']);
            $ct_company_loc = htmlspecialchars($_REQUEST['ct_company_loc']);
            $ct_technology = htmlspecialchars($_REQUEST['ct_technology']);
            $ct_number = $_REQUEST['ct_number'];

            

            try {
              $query = "insert into corporate_training (ct_name,ct_email,ct_number,ct_company,ct_company_loc,ct_technology) values ('$ct_name','$ct_email','$ct_number','$ct_company','$ct_company_loc','$ct_technology' )";
              $subscribe07 = mysqli_query($conn, $query);


              


              if ($subscribe07) {

                echo "<span class='text-white'>submitted successfuly.</span>";
              } else {

                echo "<span class='text-white'>failed to submit.</span>" . mysqli_error($conn);
              }
            } catch (\Exception $e) {
              printf(mysqli_error($conn));
            }
          }

          ?>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>




<?php include('include/footer.php') ?>