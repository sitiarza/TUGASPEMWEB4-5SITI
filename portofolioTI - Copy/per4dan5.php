<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Blue Ocean Portfolio</title>

<link rel="stylesheet" href="style.css">

</head>


<body>


<nav>

<div class="logo">
siti<span>.</span>
</div>


<ul>

<li><a href="#home">Home</a></li>
<li><a href="#skill">Skill</a></li>
<li><a href="#project">Project</a></li>
<li><a href="#contact">Contact</a></li>
<li><a href="#todo">Todo</a></li>

</ul>

</nav>





<section class="hero" id="home">


<div class="hero-text">


<div class="badge">
✨ Informatics Student
</div>


<h1>

halo 
<br>

<span>selamat datang </span>

<br>

di website sayaa

</h1>


<p>

halo nama saya siti khairiyyah arza.saya mahasiswa teknik informatika uir yang suka ngoding


</p>



<a class="btn" href="#contact">

Let's Connect

</a>


</div>




<div class="hero-card">


<img src="sitilucu.jpeg">


<h3>
Web Developer
</h3>


<p>
UI Design • Coding • Technology
</p>


</div>



</section>







<section class="stats">


<div>
<h2>10+</h2>
<p>Project</p>
</div>


<div>
<h2>5+</h2>
<p>Skill</p>
</div>


<div>
<h2>100%</h2>
<p>Learning</p>
</div>



</section>







<section id="skill" class="section">


<h2>My Skills</h2>



<div class="cards">


<div>
💻
<h3>Web Development</h3>
<p>HTML CSS PHP</p>
</div>



<div>
🎨
<h3>UI Design</h3>
<p>Modern Interface</p>
</div>




<div>
⚡
<h3>Programming</h3>
<p>C++ Python</p>
</div>


</div>


</section>







<section id="project" class="section">


<h2>My Project</h2>



<div class="project">


<div>

<h3>Portfolio Website</h3>

<p>
Website personal dengan CRUD
dan backend.

</p>

</div>



<div>

<h3>Todo Application</h3>

<p>
Aplikasi manajemen tugas sederhana.

</p>

</div>



<div>

<h3>Data Science</h3>

<p>
Analisis data menggunakan Python.

</p>

</div>


</div>



</section>








<section class="section">


<h2>Education Timeline</h2>



<div class="timeline">


<div>

<h3>2024 - Now</h3>

<p>
Universitas Islam Riau
<br>
Teknik Informatika
</p>

</div>



<div>

<h3>2021 - 2024</h3>

<p>
SMA Negeri 4 Pekanbaru
<br>
IPA
</p>

</div>


</div>


</section>









<section id="contact" class="section">


<h2>Contact Me</h2>



<form action="proses_kontak.php" method="post">


<input 
name="nama"
placeholder="Nama">


<input
name="email"
placeholder="Email">


<textarea
name="pesan"
placeholder="Pesan">
</textarea>


<input 
type="hidden"
name="kirim_pesan"
value="1">


<button>
Send Message 🚀
</button>



</form>


</section>









<section id="todo" class="todo">


<h2>
Daily Todo 🚀
</h2>



<form action="proses_todo.php" method="post">


<div class="todo-input">


<input 
type="text"
id="todo-input"
name="task_text"
placeholder="Tambah tugas">

<button 
type="submit"
name="add_task"
id="add-btn">

+


</button>


</div>


</form>



<ul id="todo-list">


<?php

include 'koneksi.php';


$data = mysqli_query(
$conn,
"SELECT * FROM todos ORDER BY id DESC"
);



while($row = mysqli_fetch_assoc($data)){


?>

<li>

<?php echo $row['task_text']; ?>


<a href="proses_todo.php?delete=<?php echo $row['id']; ?>">
❌
</a>


</li>


<?php

}

?>


</ul>


</section>






<footer>


<h3>
Siti Portfolio
</h3>


<p>
© 2026 Informatics Engineering
</p>


</footer>






</body>

</html>