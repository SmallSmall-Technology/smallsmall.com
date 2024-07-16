        <section>
            <h3 class="head-title">Get the latest from Smallsmall</h3>
            <div class="section-inner">
                <ul class="blog-container">
                <?php if(isset($articles) && !empty($articles)){ ?>
                    <?php foreach($articles as $article => $values){ ?>
                    <li class="blog-item">
                        <div class="blog-image">
                            <img src="https://dev-rent.smallsmall.com/uploads/news/<?php echo $values['articleSlug']."/".$values['featuredImage']; ?>" />
                        </div>
                        <div class="blog-item-bottom">
                            <div class="blog-item-title">
                                <?php echo $values['articleTitle']; ?>
                            </div>
                            <!---<div class="blog-item-excerpt">
                                Join our engaging podcast discussions and stay ahead of economic opportunities in the instalment payment industry.
                            </div>--->
                            <a class="blog-item-btn" target="_blank" href="https://dev-rent.smallsmall.com/article/<?php echo $values['articleSlug']; ?>">Read More</a>
                        </div>
                    </li>
                    <?php } ?>
                <?php } ?>                    
                </ul>
            </div>
        </section>