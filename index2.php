<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Sticky Table Headers Revisited | Demo 2</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/ShapeHoverEffectSVG/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=18116"><span>Back to the Codrops Article</span></a></span>
			</div>
			<header>
				<h1>Sticky Table Headers <em>Revisited</em> <span>Creating functional and flexible sticky table headers</span></h1>	
				<nav class="codrops-demos">
					<a href="index.php">Basic Usage</a>
					<a class="current-demo" href="index2.php">Biaxial Headers</a>
					<a href="index3.php">Wide Tables</a>
				</nav>
			</header>
			<div class="component">
				<h2>Biaxial headers</h2>
				<p>Biaxial headers are possible &mdash; this is for situations where both horizontal and vertical headers are needed.</p>
				<p>The example below has the first cell wrapped in &lt;th&gt; instead of &lt;td&gt;:</p>
				<table>
					<thead>
						<tr>
							<th>Sample ID</th>
							<th>Reading #1</th>
							<th>Reading #2</th>
							<th>Reading #3</th>
							<th>Reading #4</th>
							<th>Reading #5</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Sample #1</th>
							<td>52</td>
							<td>40</td>
							<td>9</td>
							<td>47</td>
							<td>31</td>
						</tr>
						<tr>
							<th>Sample #2</th>
							<td>27</td>
							<td>55</td>
							<td>97</td>
							<td>52</td>
							<td>19</td>
						</tr>
						<tr>
							<th>Sample #3</th>
							<td>36</td>
							<td>68</td>
							<td>89</td>
							<td>78</td>
							<td>60</td>
						</tr>
						<tr>
							<th>Sample #4</th>
							<td>95</td>
							<td>46</td>
							<td>62</td>
							<td>24</td>
							<td>14</td>
						</tr>
						<tr>
							<th>Sample #5</th>
							<td>19</td>
							<td>66</td>
							<td>31</td>
							<td>99</td>
							<td>77</td>
						</tr>
						<tr>
							<th>Sample #6</th>
							<td>57</td>
							<td>15</td>
							<td>57</td>
							<td>9</td>
							<td>11</td>
						</tr>
						<tr>
							<th>Sample #7</th>
							<td>69</td>
							<td>46</td>
							<td>16</td>
							<td>33</td>
							<td>85</td>
						</tr>
						<tr>
							<th>Sample #8</th>
							<td>18</td>
							<td>93</td>
							<td>84</td>
							<td>57</td>
							<td>35</td>
						</tr>
						<tr>
							<th>Sample #9</th>
							<td>92</td>
							<td>10</td>
							<td>69</td>
							<td>35</td>
							<td>0</td>
						</tr>
						<tr>
							<th>Sample #10</th>
							<td>4</td>
							<td>87</td>
							<td>51</td>
							<td>22</td>
							<td>19</td>
						</tr>
						<tr>
							<th>Sample #11</th>
							<td>24</td>
							<td>23</td>
							<td>85</td>
							<td>34</td>
							<td>83</td>
						</tr>
						<tr>
							<th>Sample #12</th>
							<td>92</td>
							<td>6</td>
							<td>67</td>
							<td>65</td>
							<td>12</td>
						</tr>
						<tr>
							<th>Sample #13</th>
							<td>10</td>
							<td>77</td>
							<td>64</td>
							<td>51</td>
							<td>63</td>
						</tr>
						<tr>
							<th>Sample #14</th>
							<td>65</td>
							<td>85</td>
							<td>42</td>
							<td>90</td>
							<td>94</td>
						</tr>
						<tr>
							<th>Sample #15</th>
							<td>34</td>
							<td>48</td>
							<td>38</td>
							<td>6</td>
							<td>21</td>
						</tr>
						<tr>
							<th>Sample #16</th>
							<td>26</td>
							<td>72</td>
							<td>47</td>
							<td>27</td>
							<td>43</td>
						</tr>
						<tr>
							<th>Sample #17</th>
							<td>79</td>
							<td>86</td>
							<td>85</td>
							<td>10</td>
							<td>10</td>
						</tr>
						<tr>
							<th>Sample #18</th>
							<td>39</td>
							<td>68</td>
							<td>91</td>
							<td>71</td>
							<td>74</td>
						</tr>
						<tr>
							<th>Sample #19</th>
							<td>70</td>
							<td>4</td>
							<td>59</td>
							<td>82</td>
							<td>10</td>
						</tr>
						<tr>
							<th>Sample #20</th>
							<td>63</td>
							<td>16</td>
							<td>62</td>
							<td>28</td>
							<td>13</td>
						</tr>
					</tbody>
				</table>
				<p class="filler">eu, magna. Suspendisse facilisis gravida, nisl pellentesque sagittis vel, accumsan fringilla orci. Ut rhoncus dolor ac nibh ut justo. Vivamus faucibus vestibulum. Nunc ut venenatis nulla. eu, magna. Suspendisse facilisis gravida, nisl pellentesque sagittis vel, accumsan fringilla orci. Ut rhoncus dolor ac nibh ut justo. Vivamus faucibus vestibulum. Nunc ut venenatis nulla. eu, magna. Suspendisse facilisis gravida, nisl pellentesque sagittis vel, accumsan fringilla orci. Ut rhoncus dolor ac nibh ut justo. Vivamus faucibus vestibulum. Nunc ut venenatis nulla.</p>
			</div>
			<section class="related">
				<p>If you enjoyed these effects you might also like:</p>
				<div><a href="http://tympanus.net/Development/HeaderEffects/"><h4>On Scroll Header Effects</h4></a></div>
				<div><a href="http://tympanus.net/Development/MultiElementSelection/"><h4>Multi-Item Selection</h4></a></div>
			</section>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>