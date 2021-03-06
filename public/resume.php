<?php

require '../core/bootstrap.php';

//require '../core/session.php';
//checkSession();

//Build the page metadata
$meta = [];
$meta['description'] = "Resume MicroTrain2101 For Web Development";
$meta['keywords'] = "resume, MicroTrain2101, Web development, web development";


$content = <<<EOT

    <main font-size:40px>
    
      <h1>Philip Rodgers</h1>
    
      <div>
        Chicago Ridge, IL
        &#x25CF;
        312-399-2974
        &#x25CF;
        philip_rodgers@hotmail.com
        <br>
        <a href="https://www.linkedin.com/in/philip-rodgers-26a91316/" target="_blank" rel="noopener">LinkedIn</a>
        &#x25CF;
        <a href="http://github.com/microtrain2101" target="_blank" rel="noopener">GitHub</a>
      </div>
    
      <h2>Full Stack Web and Hybrid Mobile Apps Developer</h2>

      <div class="row">
          IT professional with over 20 years of experience specializing in full stack JavaScript application
            and architectures. Experienced in all stages of the development life cycle, well versed in numerous
            programming languages. Provides effecient, timely, and cost-cutting solutions to IT issues.             
          
          <ul>
            <li>Hands-on experience leading all stages of systems development efforts</li>
            <li>Outstanding leadership abilities; able to coordinate and direct all phases of projects</li>
          </ul>

      </div>

      
        <h3>Core Competencies</h3>

        <ul class="cc-left">
          <li>Full Stack Development</li>
          <li>Hybrid Mobile Development</li>
        </ul>
        <ul class="cc-right">
          <li>Strong Analytical Skills</li>
          <li>Strong Leadership Skills</li>
        </ul>
      

      <!--  
      <h2>TECHNICAL PROFICIENCIES</h2>
        <ul>
          <li>Agile Certified Scrum Master</li>
          <li>VB.Net, VSTO, VBA, .NET Frameworks</li>
          <li>ASP.Net, JavaScript, JSON, HTML, XML</li>
          <li>SQL, T-SQL, and PL/SQL</li>
          <li>SQL Server, Sybase, Oracle, and Access</li>
          <li>IIS, Git, Stash, TFS, Jira, Remedy</li>
        </ul>
      -->


      <section class="clearfix">
        <h2>Certifications and Technical Proficiencies</h2>
        <div class="row"> 
        <table>
          <tbody>
            <tr>
              <th>Certifications:</th>
              <td>Agile Certified Scrum Master</td>
            </tr>
            <tr>
              <th>Platforms:</th>
              <td>Linux, LAMP, MEAN, NodeJS, Windows</td>
            </tr>
            <tr>
              <th>Databases:</th>
              <td>SQL Server, Sybase, Oracle, and Access</td>
            </tr>
            <tr>
              <th>Tools:</th>
              <td>VS Code, SSH, Gulp, Git, Stash, TFS, Jira, Remedy</td>
            </tr>
            <tr>
              <th>Languages:</th>
              <td>HTML, CSS, SASS, JavaScript, ES6, PHP, BASH, SQL, TypeScript, 
                  VB.Net, VSTO, VBA, .NET Frameworks, ASP.Net, JSON, HTML, XML, 
                  SQL, T-SQL, and PL/SQL</td>
            </tr>
          </tbody>
        </table>
        </div>
      </section>


      <h2>Professional Experience</h2>
      
      <div class="row">
        <p>
        <b>CME Group</b><br>
        May 2015 - March 2020<br>
          Systems Analyst<br>
          <ul>
            <li>Applied systems analysis to evaluate business issues for examiners in our Financial Regulatory Surveillance department.</li>
            <li>Developed and maintained complex systems and subsystems including several thick client apps and web apps utilized to
                conduct and track exams.</li>
            <li>Also provided real-time support to client firms regulated by our department.</li>
          </ul>
        </p>
      </div>

      <div class="row">
        <p>
        <b>AMA Insurance</b><br>
        Feb 2015 - April 2015<br>
          VB.Net Architect<br>
          <ul>
            <li>Analysis, design, and .NET implementation of existing VB6 application that manages very large volume document
                printing for entire physician customer base.</li>
            <li>Stored document library and customer database on AS/400.</li>
          </ul>
        </p>
      </div>

      <h2>Education</h2>
      
      <div class="row">
        <p>
        <b>MicroTrain Technologies - Chicago, IL</b><br>
        April 2021<br>
        Certification - Agile Full Stack Web and Hybrid Mobile Application Development
        </p>
      </div>

      <div class="row">
        <p>
        <b>DeVry Institute of Technology - Chicago, IL </b><br>
        Sep 1983 - June 1987<br>
        Bachelor of Science in Electrical Engineering Technology
        </p>
      </div>
      
    </main>

    EOT;

include '../core/layout.php';