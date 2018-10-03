<?php
session_start();
error_reporting(0);
require '../../config/urls.php';
$post['token'] = $_SESSION['token'];
if ($_POST['barcode'] == '')
					{

					}
else
					{
										$connected = fopen("http://www.google.com:80/", "r");
										if ($connected)
															{
																				$name       = $_POST['barcode'];
																				$servername = "localhost";
																				$username   = "root";
																				$password   = "";
																				$dbname     = "tesetturpazari";

																				// Create connection
																				$conn = mysqli_connect($servername, $username, $password, $dbname);
																				// Check connection
																				if (!$conn)
																									{
																														die("0");
																									}

																				$sql    = "SELECT code FROM kargo where code='$name'";
																				$result = mysqli_query($conn, $sql);

																				if (mysqli_num_rows($result) > 0)
																									{
																														// output data of each row
																														echo "6";
																														exit();
																									}



																				if (isset($_POST['barcode']))
																									{
																														$name       = $_POST['barcode'];
																														$servername = "localhost";
																														$username   = "root";
																														$password   = "";
																														$dbname     = "tesetturpazari";

																														// Create connection
																														$conn = mysqli_connect($servername, $username, $password, $dbname);
																														// Check connection
																														if (!$conn)
																																			{
																																								die("0");
																																			}

																														$sql = "INSERT INTO kargo (code)
  VALUES ('$name')";

																														if (mysqli_query($conn, $sql))
																																			{

																																			}
																														else
																																			{
																																								echo "3";
																																			}

																														mysqli_close($conn);
																														//if not iptal
																														//echo $getOrderDetails;
																														$url = $getOrderDetails;

																														$fields = array(
																																								'token' => $post['token'],
																																								'OrderStatusId' => '9',
																																								'f' => 'OrderCode | ' . $_POST['barcode'] . '',
																																								'orderby' => 'OrderId ASC'
																														);

																														$ch = curl_init();
																														curl_setopt($ch, CURLOPT_URL, $url);
																														curl_setopt($ch, CURLOPT_POST, 1);
																														curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
																														curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

																														$response = curl_exec($ch);
																														curl_close($ch);

																														//print_r($response);
																														$ipt = json_decode($response, true);

																														foreach ($ipt as $summary)
																																			{
																																								if ($summary['totalRecordCount'] == '1')
																																													{
																																																		echo "5";
																																																		exit();
																																													}
																																								if ($summary['totalRecordCount'] == '0')
																																													{
																																																		// code...



																																																		//change


																																																		$url = $updateOrderStatusAsCargoReady;

																																																		$fields = array(
																																																												'token' => $post['token'],
																																																												'data' => '[    {        "OrderCode":"' . $_POST['barcode'] . '"    }]'
																																																		);

																																																		$ch = curl_init();
																																																		curl_setopt($ch, CURLOPT_URL, $url);
																																																		curl_setopt($ch, CURLOPT_POST, 1);
																																																		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
																																																		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

																																																		$response = curl_exec($ch);
																																																		curl_close($ch);

																																																		//print_r($response);
																																																		$arr = json_decode($response, true);
																																																		foreach ($arr['message'] as $value)
																																																							{
																																																												if ($value['type'] == '2')
																																																																	{
																																																																						echo "2";
																																																																	}
																																																												if ($value['type'] == '1')
																																																																	{
																																																																						echo "1";
																																																																	}

																																																							}





																																													}
																																			}
																														//change End


																									}

															}
										else
															{
																				echo "4";
															}
					}

?>
