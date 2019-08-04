<?php
$title = "Klasemen La Liga";
require_once 'control/Operation.php';
$op = new Operation();
$url = $op->baseUrl();
$laliga = 'klasemen-laliga.php';
$epl = 'klasemen-epl.php';
require_once 'includes/kepala.php';
?>

<body>
   <?php
   require_once 'includes/nav.php';
   ?>
   <div class="bawah-nav"></div>
   <div class="container">
      <div class="content cf">
         <div class="main">
            <h1 class="judul-utama">Klasemen Laliga</h1>
            <p class="ket-berita">Update Pada (28/04/2019) 12:06 WIB via <a href="https://www.google.com/search?client=firefox-b-d&q=la+liga+tables#sie=lg;/g/11f57gslw8;2;/m/09gqx;st;fp;1;;" class="text-hitam font-bold" target="_blnk">Google.com</a></p>

            <!-- Tabel -->
            <table class="klasemen">
               <tr>
                  <th>No.</th>
                  <th>Klub</th>
                  <th>P</th>
                  <th>B</th>
                  <th>M</th>
                  <th>S</th>
                  <th>K</th>
                  <th>MG</th>
                  <th>KG</th>
                  <th>SG</th>
               </tr>
               <tr class="tabel-border-left-ucl">
                  <td>1</td>
                  <td>FC Barcelona</td>
                  <td>83</td>
                  <td>35</td>
                  <td>24</td>
                  <td>9</td>
                  <td>2</td>
                  <td>85</td>
                  <td>32</td>
                  <td>53</td>
               </tr>
               <tr class="tabel-border-left-ucl">
                  <td>2</td>
                  <td>Atletico Madrid</td>
                  <td>74</td>
                  <td>35</td>
                  <td>22</td>
                  <td>8</td>
                  <td>5</td>
                  <td>52</td>
                  <td>23</td>
                  <td>29</td>
               </tr>
               <tr class="tabel-border-left-ucl">
                  <td>3</td>
                  <td>Real Madrid</td>
                  <td>65</td>
                  <td>34</td>
                  <td>20</td>
                  <td>5</td>
                  <td>9</td>
                  <td>59</td>
                  <td>38</td>
                  <td>21</td>
                  </td>
               <tr class="tabel-border-left-ucl">
                  <td>4</td>
                  <td>Getave</td>
                  <td>55</td>
                  <td>34</td>
                  <td>14</td>
                  <td>13</td>
                  <td>7</td>
                  <td>43</td>
                  <td>29</td>
                  <td>14</td>
               </tr>
               <tr class="tabel-border-left-uel">
                  <td>5</td>
                  <td>Sevilla</td>
                  <td>55</td>
                  <td>34</td>
                  <td>16</td>
                  <td>7</td>
                  <td>11</td>
                  <td>59</td>
                  <td>42</td>
                  <td>17</td>
               </tr>
               <tr class="tabel-border-left-kuel">
                  <td>6</td>
                  <td>Valencia</td>
                  <td>52</td>
                  <td>34</td>
                  <td>12</td>
                  <td>16</td>
                  <td>6</td>
                  <td>40</td>
                  <td>31</td>
                  <td>9</td>
               </tr>
               <tr>
                  <td>7</td>
                  <td>Athletic Bilbao</td>
                  <td>50</td>
                  <td>35</td>
                  <td>12</td>
                  <td>14</td>
                  <td>9</td>
                  <td>38</td>
                  <td>41</td>
                  <td>-3</td>
               </tr>
               <tr>
                  <td>8</td>
                  <td>Deportivo Alavés</td>
                  <td>47</td>
                  <td>35</td>
                  <td>12</td>
                  <td>11</td>
                  <td>12</td>
                  <td>36</td>
                  <td>45</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>9</td>
                  <td>RCD Espanyol</td>
                  <td>43</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>10</td>
                  <td>Real Betis</td>
                  <td>43</td>
                  <td>34</td>
                  <td>12</td>
                  <td>7</td>
                  <td>15</td>
                  <td>39</td>
                  <td>49</td>
                  <td>-10</td>
               </tr>
               <tr>
                  <td>11</td>
                  <td>Leganes</td>
                  <td>42</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>12</td>
                  <td>Real Sociedad</td>
                  <td>41</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>13</td>
                  <td>Eibar</td>
                  <td>40</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>14</td>
                  <td>Villareal</td>
                  <td>39</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>15</td>
                  <td>Levante</td>
                  <td>37</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>16</td>
                  <td>Celta de Vigo</td>
                  <td>37</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr>
                  <td>17</td>
                  <td>Valladolid</td>
                  <td>35</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr class="tabel-border-left-deg">
                  <td>18</td>
                  <td>Girona</td>
                  <td>34</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr class="tabel-border-left-deg">
                  <td>19</td>
                  <td>Huesca</td>
                  <td>29</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
               </tr>
               <tr class="tabel-border-left-deg">
                  <td>20</td>
                  <td>Rayo Valecano</td>
                  <td>28</td>
                  <td>34</td>
                  <td>11</td>
                  <td>10</td>
                  <td>13</td>
                  <td>40</td>
                  <td>49</td>
                  <td>-9</td>
                  </td>
            </table>
            <!-- End of Table -->
            <div id="keterangan-tabel">
               <div class='kotak-ket-tabel'>
                  <p class="ket-tabel"><span>P</span> Points</p>
                  <p class="ket-tabel"><span>B</span> Bermain</p>
                  <p class="ket-tabel"><span>M</span> Menang</p>
                  <p class="ket-tabel"><span>S</span> Seri</p>
                  <p class="ket-tabel"><span>K</span> Kalah</p>
                  <p class="ket-tabel"><span>MG</span> Memasukkan Goal</p>
                  <p class="ket-tabel"><span>KG</span> Kemasukan Goal</p>
                  <p class="ket-tabel"><span>SG</span> Selisih Goal</p>
               </div>
               <div class="kotak-ket-tabel2">
                  <ul>
                     <li class="bg-succes"><a class="text-white">Penyisihan Grup UCL</a></li>
                     <li class="bg-warning"><a class="text-hitam">Penyisihan Grup UEL</a></li>
                     <li class="bg-green"><a class="text-white">Kualifikasi UEL</a></li>
                     <li class="bg-danger"><a class="text-white">Zona Degradasi</a></li>
                  </ul>
               </div>
            </div>

         </div>

         <!-- end of main -->

         <!-- sidebar -->
         <div class="sidebar cf">
            <h3>Hasil Pertandingan</h3>
            <div class="hasil">
               <a href="" class="score">Betis <span>1 - 2 </span> Real Madrid</a>
            </div>
            <div class="hasil">
               <a href="" class="score">Man City <span>3 - 1 </span> Man United</a>
            </div>
            <div class="hasil">
               <a href="" class="score">Real Betis <span>1 - 1 </span> Espanyol</a>
            </div> <br>
            <h3>Berita Lainnya</h3>
            <div class="gambar-side gambar-2-side"></div>
            <p>Manchester City kembali ke puncak klasemen Premier League kasta teratas Liga Inggris seusai memenangi
               laga derbi versus Manchester United dengan skor 3-1 pada pertandingan pekan ke-12 di Stadion Etihad,
               Minggu (11/11/2018). <span>
                  <a href="https://bola.kompas.com/read/2018/11/12/04151368/hasil-man-city-vs-man-united-menangi-derbi-city-kembali-ke-puncak" target="_balnk">Selengkapnya</a>
               </span></p>
            <div class="gambar-side gambar-3-side"></div>
            <p>Hasil Akhir dan Kalsemen La Liga Jornada 25. <span>
                  <a href="https://bola.kompas.com/read/2018/11/12/04151368/hasil-man-city-vs-man-united-menangi-derbi-city-kembali-ke-puncak" target="_balnk">Selengkapnya</a>
               </span></p>
         </div>
      </div>
   </div>


   <div class="footer">
      <p>&copy; Andri Ilham 2019</p>
   </div>

</body>

</html>