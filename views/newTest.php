<?php include '../views/header2.php';?>
<?php if($data ===TRUE):?>
    <div class="alert alert-success" role="alert">
       Test is added successfully ! 
    </div> 
            <?php elif($data ===FALSE)?>
            <div class="alert alert-danger" role="alert">
            <?php echo $data ?>
            </div>
            <?php endif;?>
<h1>Test <?=  Exam_model::number_of_exams()+1; ?></h1>
<form enctype="multipart/form-data" method="GET" action="http://testonline.com/?cont=Exam_cont/insertion">
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question one</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q1"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a1"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b1"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c1"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d1"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A1"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question two</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q2"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a2"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b2"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c2"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d2"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A2"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question three</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q3"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a3"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b3"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c3"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d3"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A3"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question four</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q4"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a4"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b4"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c4"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d4"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A4"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question five</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q5"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a5"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b5"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c5"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d5"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A5"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question six</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q6"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a6"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b6"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c6"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d6"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A6"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question seven</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q7"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a7"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b7"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c7"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d7"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A7"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question eight</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q8"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a8"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b8"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c8"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d8"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A8"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question nine</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q9"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a9"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b9"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c9"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d9"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A9"  required="required">
                </div>
</div>
<div class="form-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question ten</span>
  </div>
    <textarea class="form-control" aria-label="With textarea" name="q10"></textarea>
</div>
<h3>Choices:</h3>
<div class="form-group row">
    <label  class="col-1 col-form-label">a)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="first option"   name="a10"  required="required">
    </div>
    <label  class="col-1 col-form-label">b)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="second option"   name="b10"  required="required">
    </div>
    <label  class="col-1 col-form-label">c)</label>
    <div class="col-2">
        <input class="form-control" type="text"   placeholder="third option"   name="c10"  required="required">
    </div>
    <label  class="col-1 col-form-label">d)</label>
    <div class="col-2">
    <input class="form-control" type="text"   placeholder="fourth option"   name="d10"  required="required">
    </div>
</div>
<div class="form-group row">
            <label  class="col-2 col-form-label">Answer:</label>
                <div class="col-1">
                <input class="form-control" type="text"   placeholder="Answer"   name="A10"  required="required">
                </div>
</div>
<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>
<?php include '../views/footer1.php';?> </div>