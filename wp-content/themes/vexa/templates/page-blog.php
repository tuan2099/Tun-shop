<?php global $post;
/**
 * Template name: Blog
 * @author : Hoang Anh Tuan
 */
get_header();?>

<div>
    <div
      class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden"
    >
      <div class="layout-container flex h-full grow flex-col">
        <div
          class="px-4 sm:px-10 md:px-20 lg:px-40 flex flex-1 justify-center py-8"
        >
          <div
            class="layout-content-container flex flex-col max-w-[1200px] flex-1 gap-10"
          >
            <!-- Page Heading & Featured Section -->
            <div class="flex flex-col gap-6">
              <div class="flex flex-wrap justify-between gap-3 px-4">
                <div class="flex flex-col gap-3">
                  <h1
                    class="text-white text-4xl sm:text-5xl font-black leading-tight tracking-[-0.033em]"
                  >
                    Tin Tức &amp; Tiêu Điểm
                  </h1>
                  <p
                    class="text-text-secondary text-lg font-normal leading-normal max-w-2xl"
                  >
                    Cập nhật những xu hướng công nghệ mới nhất, các bài viết
                    chuyên sâu về lập trình và thiết kế web.
                  </p>
                </div>
              </div>
              <!-- Featured Grid -->
              <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-4">
                <!-- Main Featured Article -->
                <div
                  class="lg:col-span-2 group relative cursor-pointer overflow-hidden rounded-xl bg-card-dark shadow-lg hover:shadow-primary/20 transition-all duration-300 border border-transparent hover:border-primary/50"
                >
                  <div
                    class="w-full h-64 sm:h-80 md:h-96 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                    data-alt="abstract futuristic cybersecurity digital lock interface"
                    style="
                      background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAIs39ml-R2T6Hdec_CNpOyMPXC7fbeukXgiUHvXmqKMKsHzWBnE87xZVciaKjPYqT9ftxG1GyN0K9enuGq9SZmnbbNfq70egp6D4n6sapC_sodkou9e82RhhNd_QyJBfN8mkI5DtkO5qvQLf3bTrB-MOqZhVE0_JfxkP4d9Bgh_whDaGU7SjxXg_K2_IX32QC6pjtVtXk0gBnaveyzP7Uiydo0ct-4KXWEcyTIvhskN5WNE-Am0Ssj-xUtLVQv7iYHOOOvDlV2z94');
                    "
                  >
                    <div
                      class="absolute inset-0 bg-gradient-to-t from-[#111522] via-[#111522]/60 to-transparent"
                    ></div>
                  </div>
                  <div
                    class="absolute bottom-0 left-0 p-6 sm:p-8 flex flex-col gap-3"
                  >
                    <span
                      class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-primary text-white w-fit"
                      >An ninh mạng</span
                    >
                    <h2
                      class="text-white text-2xl sm:text-3xl font-bold leading-tight group-hover:text-primary transition-colors"
                    >
                      Bảo Mật Web 2024: Những Lỗ Hổng Mới Cần Đề Phòng
                    </h2>
                    <div
                      class="flex items-center gap-4 text-text-secondary text-sm"
                    >
                      <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[18px]"
                          >calendar_today</span
                        >
                        <span>24/10/2023</span>
                      </div>
                      <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[18px]"
                          >schedule</span
                        >
                        <span>8 phút đọc</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Side Featured Articles -->
                <div class="flex flex-col gap-6">
                  <div
                    class="flex-1 group relative cursor-pointer overflow-hidden rounded-xl bg-card-dark p-4 flex flex-col justify-between border border-[#232c48] hover:border-primary/50 transition-colors"
                  >
                    <div class="flex gap-4 h-full">
                      <div
                        class="w-24 h-24 sm:w-32 sm:h-full rounded-lg bg-cover bg-center shrink-0"
                        data-alt="UI UX design sketches on paper with mobile frame"
                        style="
                          background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBYyuaxKiUaHXdK_p-prpDiE8NPJJSb4TFxxWU80neBzG8xbQ8EeyggWkJRjlowZUDMjjbzM7mUEZMNFNdPnHJvz1cB74OpGh_D-txK6zC-uOv9h3-Sv5GuyOIbdeBjFaerxYgiqV1x1LMosIKlaDZMkIfBsj4DlKEKiiDBqmantC1yVx3Il0JQBNWEnJ8HrAE5_D-HrGBTobwUbmoAdAI7-mRf_Sv-jfhq5B9a8LkIkQOMMwvGW0xRSOw94BLpbTHfYnabcTzelPs');
                        "
                      ></div>
                      <div class="flex flex-col gap-2">
                        <span
                          class="text-primary text-xs font-bold uppercase tracking-wider"
                          >UI/UX Design</span
                        >
                        <h3
                          class="text-white text-lg font-bold leading-tight line-clamp-3 group-hover:text-primary transition-colors"
                        >
                          5 Nguyên Tắc Gestalt Trong Thiết Kế Giao Diện Hiện Đại
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div
                    class="flex-1 group relative cursor-pointer overflow-hidden rounded-xl bg-card-dark p-4 flex flex-col justify-between border border-[#232c48] hover:border-primary/50 transition-colors"
                  >
                    <div class="flex gap-4 h-full">
                      <div
                        class="w-24 h-24 sm:w-32 sm:h-full rounded-lg bg-cover bg-center shrink-0"
                        data-alt="Coding screen with colorful syntax highlighting dark mode"
                        style="
                          background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAZm8Let89vZPxa25A8QH0TL-I_xOSjCsjD-U6i-4zQAUVzErVN0AiC6PLn3xf-ITBwO975cpl_Bi4NlD_NaZe2ME0Np2wYCYg7Sen6hacRnRU_0EOKk1VfL6KnHE1Hcyas1rw7ZV8PCqN_-qmFDGF6RPzKEYiE9sPwa1QPe3ZpNBGdNMyRZSwsREs7Rk3KkV2aea-wqDUWEsBLhvvBjFTWRqnKi-KMlsdyBChl5YxY54lSP91VK2O1z6mBdCt8SkUOiJjxioFAjnY');
                        "
                      ></div>
                      <div class="flex flex-col gap-2">
                        <span
                          class="text-primary text-xs font-bold uppercase tracking-wider"
                          >Frontend</span
                        >
                        <h3
                          class="text-white text-lg font-bold leading-tight line-clamp-3 group-hover:text-primary transition-colors"
                        >
                          React vs Vue: Lựa Chọn Nào Cho Dự Án Startup 2024?
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Filter & Search Section -->
            <div
              class="sticky top-[70px] z-40 bg-[#111522]/95 backdrop-blur-sm pt-4 pb-2 border-b border-[#232c48] px-4"
            >
              <div
                class="flex flex-col md:flex-row items-center justify-between gap-4"
              >
                <!-- Categories -->
                <div class="w-full md:w-auto overflow-x-auto no-scrollbar">
                  <div class="flex items-center gap-6 min-w-max">
                    <a
                      class="relative flex flex-col items-center justify-center text-white pb-3 group"
                      href="#"
                    >
                      <p
                        class="text-sm font-bold leading-normal tracking-[0.015em]"
                      >
                        Tất cả
                      </p>
                      <span
                        class="absolute bottom-0 h-[3px] w-full bg-primary rounded-t-full"
                      ></span>
                    </a>
                    <a
                      class="relative flex flex-col items-center justify-center text-text-secondary hover:text-white transition-colors pb-3 group"
                      href="#"
                    >
                      <p
                        class="text-sm font-bold leading-normal tracking-[0.015em]"
                      >
                        Web Design
                      </p>
                      <span
                        class="absolute bottom-0 h-[3px] w-0 bg-primary rounded-t-full transition-all group-hover:w-full"
                      ></span>
                    </a>
                    <a
                      class="relative flex flex-col items-center justify-center text-text-secondary hover:text-white transition-colors pb-3 group"
                      href="#"
                    >
                      <p
                        class="text-sm font-bold leading-normal tracking-[0.015em]"
                      >
                        Backend
                      </p>
                      <span
                        class="absolute bottom-0 h-[3px] w-0 bg-primary rounded-t-full transition-all group-hover:w-full"
                      ></span>
                    </a>
                    <a
                      class="relative flex flex-col items-center justify-center text-text-secondary hover:text-white transition-colors pb-3 group"
                      href="#"
                    >
                      <p
                        class="text-sm font-bold leading-normal tracking-[0.015em]"
                      >
                        Frontend
                      </p>
                      <span
                        class="absolute bottom-0 h-[3px] w-0 bg-primary rounded-t-full transition-all group-hover:w-full"
                      ></span>
                    </a>
                    <a
                      class="relative flex flex-col items-center justify-center text-text-secondary hover:text-white transition-colors pb-3 group"
                      href="#"
                    >
                      <p
                        class="text-sm font-bold leading-normal tracking-[0.015em]"
                      >
                        AI Tools
                      </p>
                      <span
                        class="absolute bottom-0 h-[3px] w-0 bg-primary rounded-t-full transition-all group-hover:w-full"
                      ></span>
                    </a>
                  </div>
                </div>
                <!-- Search -->
                <div class="w-full md:w-auto md:min-w-[300px]">
                  <label
                    class="flex w-full items-center h-10 rounded-lg bg-[#232c48] focus-within:ring-2 focus-within:ring-primary/50 transition-all"
                  >
                    <div
                      class="flex items-center justify-center pl-3 text-text-secondary"
                    >
                      <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                      class="w-full bg-transparent border-none text-white placeholder:text-text-secondary focus:ring-0 text-sm px-3"
                      placeholder="Tìm kiếm bài viết, chủ đề..."
                    />
                  </label>
                </div>
              </div>
            </div>
            <!-- Main Content Grid -->
            <div class="pb-12">
              <?php
              $paged      = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
              $blog_query = new WP_Query(
                array(
                  'post_type'      => 'post',
                  'post_status'    => 'publish',
                  'posts_per_page' => 9,
                  'paged'          => $paged,
                )
              );
              ?>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if ( $blog_query->have_posts() ) : ?>
                  <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                    <article
                      class="flex flex-col h-full rounded-xl bg-[#f4f4f4] overflow-hidden  hover:shadow-lg hover:shadow-primary/10 transition-all duration-300 group hover:-translate-y-1"
                    >
                      <a href="<?php the_permalink(); ?>" class="block">
                        <div
                          class="w-full aspect-video bg-cover bg-center relative"
                          <?php if ( has_post_thumbnail() ) : ?>
                            style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>');"
                          <?php endif; ?>
                        >
                          <div
                            class="absolute top-3 left-3 bg-lime-400 backdrop-blur-sm px-3 py-1 rounded-md border border-white/10"
                          >
                            <span class="text-xs font-bold text-[#fff]">
                              <?php
                              $categories = get_the_category();
                              echo ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Blog';
                              ?>
                            </span>
                          </div>
                        </div>
                      </a>
                      <div class="flex flex-col flex-1 p-5 gap-3">
                        <a href="<?php the_permalink(); ?>" class="block">
                          <h3
                            class="text-black text-xl font-bold leading-tight group-hover:text-primary transition-colors line-clamp-2"
                          >
                            <?php the_title(); ?>
                          </h3>
                        </a>
                        <p
                          class="text-text-secondary text-sm leading-relaxed line-clamp-3"
                        >
                          <?php echo esc_html( wp_trim_words( get_the_excerpt(), 26, '...' ) ); ?>
                        </p>
                        <div
                          class="mt-auto pt-4 flex items-center justify-between border-[#232c48]"
                        >
                          <span class="text-text-secondary text-xs flex items-center gap-1">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 64C206.3 64 192 78.3 192 96L192 128L160 128C124.7 128 96 156.7 96 192L96 240L544 240L544 192C544 156.7 515.3 128 480 128L448 128L448 96C448 78.3 433.7 64 416 64C398.3 64 384 78.3 384 96L384 128L256 128L256 96C256 78.3 241.7 64 224 64zM96 288L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 288L96 288z"/></svg>
                            <?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?>
                          </span>
                        </div>
                      </div>
                    </article>
                  <?php endwhile; ?>
                <?php else : ?>
                  <p class="text-text-secondary text-sm">
                    Hiện chưa có bài viết nào.
                  </p>
                <?php endif; ?>
              </div>
              <!-- Pagination -->
              <?php if ( $blog_query->max_num_pages > 1 ) : ?>
                <div class="flex justify-center mt-12">
                  <?php
                  echo paginate_links(
                    array(
                      'total'   => $blog_query->max_num_pages,
                      'current' => $paged,
                      'prev_text' => '&laquo;',
                      'next_text' => '&raquo;',
                    )
                  );
                  ?>
                </div>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php 
get_footer();