<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>STUFDENT NOTICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        background:#f3f6fb;
        font-family:'Segoe UI', arial, sans-serif;
        margin:0;
        padding:0;
      }
      .notice-conatainer{
        max-width: 800px;
        margin:40px auto;
        background:#fff;
        border: 3px solid red;
        border-radius:12px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        padding: 32px 24px;
      }
     h2 {
      text-align:center;
      color:#2a5298;
      margin-bottom:38px;
      letter-spacing:1px;
      }

      table{
        width: 100%;
        border: 2px solid black;
        border-collapse:collapse;
        background:#fff;
        border-radius:8px;
        box-shadow:0 2px 8px rgba(42,82,152,0.06);
      }

      th,td{
        padding:12px 16px;
        text-align:left;
        border: 2px solid black;
      }
      th{
        background-color:linear-gradient(90deg,#2a5298 0%,#1e3c72 100%);
        font-weight:600;
        letter-spacing:0.5px;
      }

      tr{
        transition:background 0.2s;
      }
      tr:nth-child(even){
        background:#f0f4fa;

      }
      tr:hover{
        background:#e6ecfa;
      }

      td{
        color:#333;
        font-size:1rem;
        vertical-align:middle;
      }
      .badge{
        display: inline-block;
        padding: 4px 10px;
        font-size:0.9rem;
        background:yellowgreen;
        font-weight:500;
      }

      @media(max-width:600px){
        .notice-conatainer{
          padding:12px 4px;
        }
      }

      th,td{
        padding:10px 6px;
        font-size:0.95em;
      }

      .down-btn{
        display: inline-block;
        text-decoration:none;
        padding:6px 16px;
        background:#2d8cff;
        color: #fff;
        border-radius:5px;
        font-weight:500;
        transition:background 0.2s, transform 0.2s;
      }
      .down-btn:hover{
        background:#1857b1;
        transform:translateY(-2px) scale(1.06);
      }

    </style>
  </head>
  <body>
    <div class="notice-conatainer">
     <h2>📢 Student Notice Board 📢</h2>
      <table>
        <thead>
          <tr>
            <th>SL NO</th>
             <th>DATE</th>
            <th>NOTICE</th>
             <th>CATEGORY</th>
              <th>DOWNLAOAD</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>            
            <td>16-02-2024</td>
            <td>Annual Sports Meet Registration</td>
            <td><span class="badge">Sports</span></td>
            <td><a href="IT/ad.pdf" class="down-btn" download>Download</a></td>
          </tr>
          <tr>
            <td>2</td>            
            <td>19-06-2025</td>
            <td>Submission deadline for project report extended 22 June </td>
            <td><span class="badge" style="background:#fbc02d;">Academics</span></td>
            <td><a href="IT/en.pdf" class="down-btn" download>Download</a></td>
          </tr>
          <tr>
            <td>3</td>            
            <td>16-04-2025</td>
            <td>Library will be closed for maintenance on 17 Apirl</td>
            <td><span class="badge" style="background:#43a047;">Library</span></td>
            <td><a href="IT/lg.pdf" class="down-btn" download>Download</a></td>
          </tr>
          <tr>
            <td>4</td>            
            <td>23-05-2025</td>
            <td>Guest lecture on Web Development by industry experts in Room 24</td>
            <td><span class="badge" style="background:#1e88e5;">Seminar</span></td>
            <td><a href="IT/FF.pdf" class="down-btn" download>Download</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>

</html>
