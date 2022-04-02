<h2>All Orders</h2>
<h4 class="text-danger"><?php display_message(); ?></h4>
<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Amount</th>
                  <th>Transaction</th>
                  <th>Currency</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php echo display_orders(); ?>
              </tbody>
            </table>
          </div>