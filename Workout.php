<?php

require_once('connection.php');
session_start();

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$username = $email = '';
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    $username = $row["username"];
        $password = $row["password"];
        $email = $row["email"];
    }   
}
?>

<?php include('work.php'); 

   //fetch record to be updated
   if(isset($_GET['edit'])){
       $id = $_GET['edit'];
       $edit_state = true;
       $rec = mysqli_query($db, "SELECT * FROM workout WHERE id=$id");
       $record = mysqli_fetch_array($rec);
       $workoutactivity = $record['workoutactivity'];
       $duration = $record['duration'];
       $cycle = $record['cycle'];
       $date = $record['date'];
       $time = $record['time'];
       $id = $record['id'];
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="moodstyle.css">
    <link rel="stylesheet" href="workstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body style="background-color:lightblue;">

    <nav class="navbar navbar-dark bg-primary">
          <div class="container">
            <a href="userPage.php" class="navbar-brand">Return to Home</a>
          </div>
      </nav>

      <div class="col-sm-12 jumbotron-fluid shadow">
        <div class="page-banner-workout">
          <div class="headertxt col-md-6 col-sm-6">
            <h1>Workout Tracker</h1>
            <p>Log your workout here </p>
        </div>  
      </div>
      </div>

    <div class="container">
        <div class="row">
          <div class="col-sm-12 jumbotron-fluid border shadow" style="padding: 20px; margin-top: 25px;">
            <div class="container" style="margin-bottom: 5vw;">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#exercise">Exercise List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#myworkout">My Workout</a>
                    </li>
                  </ul>
                
                  <div class="tab-content">
                    <div id="exercise" class="container tab-pane active"><br>
                      <h3>Exercise List</h3>

                      <h5><li>Chest Exercise</li></h5>

                      <div class="col-lg-4 col-md-6 float-left">
                          <div class="card">
                              <div class="inner">
                                  <img class="card-img-top" src="img/push-ups.png" alt="Card image cap">
                              </div>
                              <div class="centered">
                                  <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#push-ups">
                                      Push Ups
                                    </button>
                              </div>
                          </div>
                      </div>
                       
                      <div class="col-lg-4 col-md-6 float-left">
                          <div class="card">
                              <div class="inner">
                                  <img class="card-img-top" src="img/bench-press.png" alt="Card image cap">
                              </div>
                              <div class="centered">
                                <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#bench-press">
                                    Bench Press
                                  </button>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 float-left">
                          <div class="card">
                              <div class="inner">
                                  <img class="card-img-top" src="img/incline.png" alt="Card image cap">
                              </div>
                              <div class="centered">
                                <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#incline">
                                    Incline
                                  </button>
                              </div>
                          </div>
                      </div>

                    <div class="clearfix"></div>
                    <h5><li>Shoulder Exercise</li></h5>

                    <div class="col-lg-4 col-md-6 float-left">
                        <div class="card">
                            <div class="inner">
                                <img class="card-img-top" src="img/cuban.png" alt="Card image cap">
                            </div>
                            <div class="centered">
                                <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#cuban-press">
                                    Cuban Press
                                  </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 float-left">
                        <div class="card">
                            <div class="inner">
                                <img class="card-img-top" src="img/wall-climb.png" alt="Card image cap">
                            </div>
                            <div class="centered">
                                <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#wall-climb">
                                    Wall Climbing
                                  </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 float-left">
                        <div class="card">
                            <div class="inner">
                                <img class="card-img-top" src="img/push-press.png" alt="Card image cap">
                            </div>
                            <div class="centered">
                                <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#push-press">
                                    Push Press
                                  </button>
                            </div>
                        </div>
                    </div>
               
                    <div class="clearfix"></div>
                     <h5><li>Leg Exercise</li></h5>
                        
                            <div class="col-lg-4 col-md-6 float-left">
                                <div class="card">
                                    <div class="inner">
                                        <img class="card-img-top" src="img/squat.png" alt="Card image cap">
                                    </div>
                                    <div class="centered">
                                        <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#squat">
                                            Speed Squat
                                          </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6 float-left">
                                <div class="card">
                                    <div class="inner">
                                        <img class="card-img-top" src="img/calves-press.png" alt="Card image cap">
                                    </div>
                                    <div class="centered">
                                        <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#calves-press">
                                            Calves Press
                                          </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6 float-left">
                                <div class="card">
                                    <div class="inner">
                                        <img class="card-img-top" src="img/stair-climbing.png" alt="Card image cap">
                                    </div>
                                    <div class="centered">
                                        <button type="button" class="trigger-btn btn btn-primary" data-toggle="modal" data-target="#stair-climb">
                                            Stair Climbing
                                          </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div id="myworkout" class="container tab-pane fade"><br>
                      <h3>My Workout</h3>
                      <?php if(isset($_SESSION['msg'])): ?>
        <div class="msg">
            <?php
                 echo $_SESSION['msg'];
                 unset($_SESSION['msg']);
            ?>
        </div>
    <?php endif ?>

    <table>
        <thead>
        <tr>
            <th>Workout Activity</th>
            <th>Duration (min)</th>
            <th>Cycle</th>
            <th>Date</th>
            <th>Time</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php while ($row=mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['workoutactivity']; ?></td>
                <td><?php echo $row['duration']; ?></td>
                <td><?php echo $row['cycle']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td>
                    <a class="edit_btn" href="Workout.php?edit=<?php echo $row['id'];?>">Edit</a>
                </td>
                <td>
                    <a class="del_btn" href="work.php?del=<?php echo $row['id']; ?>">Delete</a>
                </td>
           </tr>
            <?php } ?>
        </tbody>
    </table>

    <form method="post" action="work.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group">
            <label>Workout Activity</label>
            <input type="text" name="workoutactivity" value="<?php echo $workoutactivity; ?>">
        </div>
        <div class="input-group">
            <label>Duration (min)</label>
            <input type="text" name="duration" value="<?php echo $duration; ?>">
        </div>
        <div class="input-group">
            <label>Cycle</label>
            <input type="text" name="cycle" value="<?php echo $cycle; ?>">
        </div>
        <div class="input-group">
            <label>Date</label>
            <input type="text" name="date" value="<?php echo $date; ?>">
        </div>
        <div class="input-group">
            <label>Time</label>
            <input type="text" name="time" value="<?php echo $time; ?>">
        </div>
        <div class="input-group">
        <?php if ($edit_state == false): ?>
            <button type="submit" name="save" class="btn">Save</button>
        <?php else: ?>
            <button type="submit" name="update" class="btn">Update</button>
        <?php endif ?>
        </div>
    </form>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="push-ups" tabindex="-1" aria-labelledby="push-ups-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="push-ups-desc">Push Ups</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">4</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">3</span> cycle<br>
                                <br>
                                Push ups are a body weight only exercise with an action similar to the bench press.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                 </div>

                

                <div class="modal fade" id="bench-press" tabindex="-1" aria-labelledby="bench-press-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="bench-press-desc">Bench Press</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">15</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">2</span> cycle<br>
                                <br>
                                The mighty bench press is a great exercise for building a powerful chest.
                                The bench press is one of the power exercises, known to be very effective for 
                                building body mass. Learning how to do a proper bench press is well worth the effort.

                                <h5>Steps</h5>
                                Most gyms have benches specifically designed for the bench press and its variations. Lie flat on one of these benches with your feet firmly on the ground. The bar should be resting on the bench's rack.
                                <br><br>
                                Lift the bar off the rack and hold it above your chest in the starting position. Lower the bar down until it touches your chest. Hold this position briefly and make sure you have complete control of the bar. Now raise the bar up to the starting postion.
                                <br><br>
                                Return the bar to the rack after you've completed your set.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                 </div>

                <div class="modal fade" id="incline" tabindex="-1" aria-labelledby="incline-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="incline-desc">Incline</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">5</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">2</span> cycle<br>
                                <br>
                                This is a variation of the bench press that targets your upper chest by using an incline bench. It'll help give your fuller, more balanced size.

                                <h5>Steps</h5>
                                Set your bench to a 45 degree angle or find a specially designed inclined bench press bench. lie flat on the bench with your feet firmly on the floor. Grip the bar slightly wider than shoulder-width apart.<br><br>
                                <br>
                                Lift the bar off the rack and hold it directly above your chest in the starting position. Lower the bar until it touches your chest, then hold it for a few moments. Finally, raise the bar up to the starting position.

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="cuban-press" tabindex="-1" aria-labelledby="cuban-press-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cuban-press-desc">Cuban Press</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">10</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">2</span> cycle<br>
                                <br>
                                The Cuban Press targets the rotator cuff muscles of your shoulders.
                                <h5>Steps</h5>
                                Stand with your feet shoulder-width apart. Grip a dumbbell in each hand with an overhand grip. Bring your elbows up and let your forearms hang down. The weights you're using should be light enough that this doesn't require much effort. Your elbows should be at a 90 degree angle. 
                                <br><br>
                                From this starting position rotate your shoulders so your forearms go from facing down towards the ground, to facing up towards the ceiling. Next, slowly rotate your shoulders so your forearms point at the ground again.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="wall-climb" tabindex="-1" aria-labelledby="wall-climb-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="wall-climb-desc">Wall Climbing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">1</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">2</span> cycle<br>
                                <br>
                                Wall-climbing where facing your face to the wall. It can be done by extreme activity such as rock-climbing or merely wall climb just anywhere
                                where the compound has walls.
                                <h5>Steps</h5>
                                Face a wall (make sure your fingers can touch the wall).
                                <br><br>
                                Keep your shoulder down (don't shrug up toward ear), walk the fingers of
                                your arm up the wall as high as pain permits.
                                <br><br>
                                Hold that position for at least 15 to 30 seconds.
                                <br><br>
                                Slowly walk the fingers back down to the starting position.
                                <br><br>
                                Repeat at least 2 to 4 times per cycle.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="push-press" tabindex="-1" aria-labelledby="push-press-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="push-press-desc">Push Press</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">2</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">2</span> cycle<br>
                                <br>
                                A push press is a weight training exercise for the anterior head of the deltoid (shoulder). The push press is used to help develop the strength of the shoulder. It can be used to push past a sticking point or develop power for the Clean and Jerk 
                                (though 'pressing' is illegal in competition). The ability to drive from the legs and through the torso to the arms is important for sports (this is also found in the bench press).
                                <h5>Steps</h5>
                                <li>Upward Movement Phase:</li>
                                <br><br>
                                Slightly flex the hips and knees, keeping torso erect.
                                <br><br>
                                Immediately follow with an explosive push upward by extending the knees.
                                Keep torso erect and tensed.
                                <br><br>
                                At maximum hip and knee extension, shift body weight to balls of feet and extend ankle joints.
                                <br><br>
                                At maximum plantar flexion, push bar from the shoulders.
                                <br><br>
                                Push the bar with the arms to a fully extended elbow position overhead.
                                <br><br>

                                <li>Downward Movement Phase:</li>
                                <br><br>
                                Slightly flex the hips and knees, keeping torso erect.
                                <br><br>
                                Lower bar to shoulders.
                                <br><br>
                                Flex hips and knees slightly as bar touches shoulders.
                                <br><br>
                                Straighten the hips and knees before the upward movement phase begins again.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="squat" tabindex="-1" aria-labelledby="squat-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="squat-desc">Speed Squat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">0.5</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">4</span> cycle<br>
                                <br>
                                This version of the squat uses an empty barbell and moves at a faster pace than the standard squat. 
                                This is a good exercise for building speed and conditioning used in running and jumping sports.
                                <h5>Steps</h5>
                                Place your feet slightly wider than shoulder width apart with your knees and toes pointed slightly outward.
                                <br><br>
                                Drawing your abs in descend slowly by bending at the knees and hips as if you are sitting down (squatting).
                                <br><br>
                                Lower yourself as far as you can control without letting your body shift towards your toes (this will cause you to loose balance).
                                <br><br>
                                Pause in the downward position and slowly return upright to the starting position.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="calves-press" tabindex="-1" aria-labelledby="calves-press-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="calves-press-desc">Calves Press on Leg Machine</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">2</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">2</span> cycle<br>
                                <br>
                                This exercise uses a Leg Press Machine to work your calves. You can perform this exercise along with Leg Presses.
                                <h5>Steps</h5>
                                Sit down on a Leg Press Machine and press the plate up as if you were performing a leg press.
                                <br><br>
                                Slide your feet down so that the balls of your feet are pressing against the rack (with your heels hanging free),
                                <br><br>
                                Keeping the handles locked, press up and flex your toes and then slowly bring your toes back towards your body (dorsiflex).
                                <br><br>
                                Perform theses movements slowly for maximum benefit.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="stair-climb" tabindex="-1" aria-labelledby="stair-climb-desc" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="stair-climb-desc">Stair Climbing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Duration: </strong><span id="workoutDuration">4</span> min<br>
                                <strong>Cycle: </strong><span id="workoutCycle">3</span> cycle<br>
                                <br>
                                Stair climbing is the simplest form of leg exercise that focuses on the strength of leg muscles. 
                                You can also use stairs instead of lift!
                                <h5>Steps</h5>
                                Going up and down the stairs for 3 to 4 minutes (warm-up pace).
                                <br><br>
                                Go at medium pace for 1 to 2 minutes.
                                <br><br>
                                Spend the next 4 minutes using tabata training (20 seconds activity + 10 seconds rest).
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
        </div>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="workout.js"></script>
</body>
</html>