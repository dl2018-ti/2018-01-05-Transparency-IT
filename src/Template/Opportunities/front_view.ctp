<?php use Cake\Utility\Inflector; ?>
<style>
a{
    color:#5da5af;
    text-decoration: none;
}
</style>
<div class="apply-for-detail">
    <div class="apply-for-detail-inner">
        <div class="wrapper">
            <!-- <div class="detail-title">
                <h2>Apply for detail</h2>
            </div> -->
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="detail-form">
                        <table class="table">
                          <tbody>
                            <tr>
                              <th scope="row">Job Title:</th>
                              <td><?php echo $opportunity->title; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Job Type:</th>
                              <td><?php echo $opportunity->work_type->name; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Location:</th>
                              <td><?php echo $opportunity->country->name; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Industry:</th>
                              <td><?php echo $opportunity->industry->name; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Salary Type:</th>
                              <td><?php echo $opportunity->salary_type->name; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Salary:</th>
                              <td><?php echo $opportunity->salary_type->name; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Job Published:</th>
                              <td><?php echo $opportunity->created->format("d-m-Y"); ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Job ID:</th>
                              <td><?php echo $opportunity->uid; ?></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>

                    <!-- Job Description -->
                    <div class="job-description-detail">
                        <h4>Job Description</h4>
                        <?php echo $opportunity->description; ?>
                    </div>

                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="detail-application">
                        <div class="detail-apply-now">
                            <?php 
                                $job_slug = Inflector::slug($opportunity->title, "-")
                            ?>
                            <a href="<?php echo $this->Url->build('/job_application/' . $opportunity->id . "/" . $job_slug ); ?>"><button>Apply Now</button></a>
                        </div>

                        <div class="detail-share-job">
                            <div class="share-title">
                                <h4>Share this Job</h4>
                            </div>
                            <div class="share-icons">
                                <div class="addthis_inline_share_toolbox" style="padding-top:12px;padding-bottom:5px;"></div>                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>