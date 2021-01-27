<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Common\Collections\ArrayCollection;

class ArticleRepository
{
    /**
     * @var ArrayCollection
     */
    private $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->articles->add(new Article(
            'slug-1',
            'title 1 Lorem ipsum dolor sit amet, consectetur adipisicing.',
            'content 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dolores excepturi facilis nisi reiciendis sed tempora. Ab accusamus at dicta eaque esse eum id illum itaque, iure iusto laudantium magnam neque, omnis quae quas qui, sapiente similique tempora temporibus velit veritatis vero voluptate! Accusantium, culpa eius enim error, eum eveniet explicabo hic laborum maxime numquam optio possimus praesentium repellendus tempora, veniam. Consequatur deleniti iste nam odio, porro recusandae reiciendis! Aliquam aliquid at atque aut consectetur debitis deserunt doloribus, eligendi expedita explicabo facilis illum laboriosam maiores, minus modi molestiae mollitia optio provident quis quisquam quo quod temporibus voluptas! Assumenda harum ipsam necessitatibus quas quidem. Aliquid enim ex fugit libero necessitatibus nemo nihil quisquam sed sunt vero? Aliquam commodi cupiditate dolor reiciendis sint. Accusantium autem cumque cupiditate esse illo illum, modi molestias nemo non rerum soluta, tempora vel? A ab animi aperiam asperiores consequatur consequuntur cupiditate eligendi enim error esse exercitationem facilis fugit harum id ipsam iusto maxime molestias nobis nulla numquam qui quisquam reprehenderit, tenetur, veritatis voluptatum! Adipisci, animi aspernatur distinctio eveniet exercitationem fugiat fugit inventore iure magnam minus molestias mollitia officia perspiciatis, quam quo quos sit temporibus, totam ut voluptatum! Accusamus adipisci aliquid asperiores blanditiis culpa delectus ea hic in laborum, nam necessitatibus neque nesciunt nihil odit officia, quae, quod ratione rem reprehenderit suscipit tempore vel veritatis voluptatibus! Alias assumenda consectetur debitis, dicta dolore id iure nesciunt nobis nulla officiis optio praesentium sequi sint soluta temporibus unde vel. Accusantium adipisci animi at cum cumque dolor dolorem dolores, ducimus expedita explicabo facilis fuga id modi mollitia nam odio perferendis provident quam repellendus sapiente sed suscipit vitae, voluptates, voluptatibus voluptatum! Ab alias culpa id inventore nostrum numquam odio odit quam quo. At cum delectus deserunt doloribus esse eum explicabo fugiat ipsum maiores maxime, minus necessitatibus nihil nostrum obcaecati provident quaerat quasi quis reiciendis repellat reprehenderit suscipit tenetur unde voluptatum! Cumque, facere, perspiciatis. Error expedita perferendis quibusdam, quisquam quod rem sit vitae. Aliquam, iste, laborum. Aspernatur atque delectus deserunt dolorem eius ipsum nemo, nihil odio placeat porro quam quisquam ratione recusandae tenetur, veritatis? Accusamus cumque ducimus, eaque excepturi, itaque labore magnam necessitatibus nulla placeat quaerat quam quas qui sint! Accusantium ea ipsa libero provident rem? Accusantium alias asperiores commodi delectus eaque eius error, ex, itaque maiores possimus praesentium quaerat quod temporibus vel voluptate. Accusantium alias consectetur eum fugiat in iste iure, magnam nobis nulla numquam obcaecati quaerat, qui quo quod temporibus totam voluptas voluptatem. Ea, exercitationem, temporibus. Commodi consectetur delectus dolorem esse et ex, illum iste reprehenderit repudiandae tempora ut voluptatum. Alias consectetur consequatur error est facilis in libero praesentium reiciendis tenetur voluptas! A asperiores atque, cum deleniti, doloremque dolores ducimus et itaque labore maxime molestiae neque, perspiciatis possimus quasi quis repellat similique suscipit veritatis. Accusantium aperiam asperiores autem blanditiis consequatur cumque deleniti dicta dolore ducimus eligendi expedita libero modi, mollitia nihil nisi perspiciatis porro possimus sapiente sit totam. Corporis cumque dignissimos, eaque enim impedit in laudantium, magni nam officiis quod recusandae saepe, tempora tempore totam velit voluptatem voluptates.',
            'content 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dol ...'
        ));
        $this->articles->add(new Article(
            'slug-2',
            'title 2 Lorem ipsum dolor sit amet, consectetur adipisicing.',
            'content 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dolores excepturi facilis nisi reiciendis sed tempora. Ab accusamus at dicta eaque esse eum id illum itaque, iure iusto laudantium magnam neque, omnis quae quas qui, sapiente similique tempora temporibus velit veritatis vero voluptate! Accusantium, culpa eius enim error, eum eveniet explicabo hic laborum maxime numquam optio possimus praesentium repellendus tempora, veniam. Consequatur deleniti iste nam odio, porro recusandae reiciendis! Aliquam aliquid at atque aut consectetur debitis deserunt doloribus, eligendi expedita explicabo facilis illum laboriosam maiores, minus modi molestiae mollitia optio provident quis quisquam quo quod temporibus voluptas! Assumenda harum ipsam necessitatibus quas quidem. Aliquid enim ex fugit libero necessitatibus nemo nihil quisquam sed sunt vero? Aliquam commodi cupiditate dolor reiciendis sint. Accusantium autem cumque cupiditate esse illo illum, modi molestias nemo non rerum soluta, tempora vel? A ab animi aperiam asperiores consequatur consequuntur cupiditate eligendi enim error esse exercitationem facilis fugit harum id ipsam iusto maxime molestias nobis nulla numquam qui quisquam reprehenderit, tenetur, veritatis voluptatum! Adipisci, animi aspernatur distinctio eveniet exercitationem fugiat fugit inventore iure magnam minus molestias mollitia officia perspiciatis, quam quo quos sit temporibus, totam ut voluptatum! Accusamus adipisci aliquid asperiores blanditiis culpa delectus ea hic in laborum, nam necessitatibus neque nesciunt nihil odit officia, quae, quod ratione rem reprehenderit suscipit tempore vel veritatis voluptatibus! Alias assumenda consectetur debitis, dicta dolore id iure nesciunt nobis nulla officiis optio praesentium sequi sint soluta temporibus unde vel. Accusantium adipisci animi at cum cumque dolor dolorem dolores, ducimus expedita explicabo facilis fuga id modi mollitia nam odio perferendis provident quam repellendus sapiente sed suscipit vitae, voluptates, voluptatibus voluptatum! Ab alias culpa id inventore nostrum numquam odio odit quam quo. At cum delectus deserunt doloribus esse eum explicabo fugiat ipsum maiores maxime, minus necessitatibus nihil nostrum obcaecati provident quaerat quasi quis reiciendis repellat reprehenderit suscipit tenetur unde voluptatum! Cumque, facere, perspiciatis. Error expedita perferendis quibusdam, quisquam quod rem sit vitae. Aliquam, iste, laborum. Aspernatur atque delectus deserunt dolorem eius ipsum nemo, nihil odio placeat porro quam quisquam ratione recusandae tenetur, veritatis? Accusamus cumque ducimus, eaque excepturi, itaque labore magnam necessitatibus nulla placeat quaerat quam quas qui sint! Accusantium ea ipsa libero provident rem? Accusantium alias asperiores commodi delectus eaque eius error, ex, itaque maiores possimus praesentium quaerat quod temporibus vel voluptate. Accusantium alias consectetur eum fugiat in iste iure, magnam nobis nulla numquam obcaecati quaerat, qui quo quod temporibus totam voluptas voluptatem. Ea, exercitationem, temporibus. Commodi consectetur delectus dolorem esse et ex, illum iste reprehenderit repudiandae tempora ut voluptatum. Alias consectetur consequatur error est facilis in libero praesentium reiciendis tenetur voluptas! A asperiores atque, cum deleniti, doloremque dolores ducimus et itaque labore maxime molestiae neque, perspiciatis possimus quasi quis repellat similique suscipit veritatis. Accusantium aperiam asperiores autem blanditiis consequatur cumque deleniti dicta dolore ducimus eligendi expedita libero modi, mollitia nihil nisi perspiciatis porro possimus sapiente sit totam. Corporis cumque dignissimos, eaque enim impedit in laudantium, magni nam officiis quod recusandae saepe, tempora tempore totam velit voluptatem voluptates.',
            'content 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dol ...'
        ));
        $this->articles->add(new Article(
            'slug-3',
            'title 3 Lorem ipsum dolor sit amet, consectetur adipisicing.',
            'content 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dolores excepturi facilis nisi reiciendis sed tempora. Ab accusamus at dicta eaque esse eum id illum itaque, iure iusto laudantium magnam neque, omnis quae quas qui, sapiente similique tempora temporibus velit veritatis vero voluptate! Accusantium, culpa eius enim error, eum eveniet explicabo hic laborum maxime numquam optio possimus praesentium repellendus tempora, veniam. Consequatur deleniti iste nam odio, porro recusandae reiciendis! Aliquam aliquid at atque aut consectetur debitis deserunt doloribus, eligendi expedita explicabo facilis illum laboriosam maiores, minus modi molestiae mollitia optio provident quis quisquam quo quod temporibus voluptas! Assumenda harum ipsam necessitatibus quas quidem. Aliquid enim ex fugit libero necessitatibus nemo nihil quisquam sed sunt vero? Aliquam commodi cupiditate dolor reiciendis sint. Accusantium autem cumque cupiditate esse illo illum, modi molestias nemo non rerum soluta, tempora vel? A ab animi aperiam asperiores consequatur consequuntur cupiditate eligendi enim error esse exercitationem facilis fugit harum id ipsam iusto maxime molestias nobis nulla numquam qui quisquam reprehenderit, tenetur, veritatis voluptatum! Adipisci, animi aspernatur distinctio eveniet exercitationem fugiat fugit inventore iure magnam minus molestias mollitia officia perspiciatis, quam quo quos sit temporibus, totam ut voluptatum! Accusamus adipisci aliquid asperiores blanditiis culpa delectus ea hic in laborum, nam necessitatibus neque nesciunt nihil odit officia, quae, quod ratione rem reprehenderit suscipit tempore vel veritatis voluptatibus! Alias assumenda consectetur debitis, dicta dolore id iure nesciunt nobis nulla officiis optio praesentium sequi sint soluta temporibus unde vel. Accusantium adipisci animi at cum cumque dolor dolorem dolores, ducimus expedita explicabo facilis fuga id modi mollitia nam odio perferendis provident quam repellendus sapiente sed suscipit vitae, voluptates, voluptatibus voluptatum! Ab alias culpa id inventore nostrum numquam odio odit quam quo. At cum delectus deserunt doloribus esse eum explicabo fugiat ipsum maiores maxime, minus necessitatibus nihil nostrum obcaecati provident quaerat quasi quis reiciendis repellat reprehenderit suscipit tenetur unde voluptatum! Cumque, facere, perspiciatis. Error expedita perferendis quibusdam, quisquam quod rem sit vitae. Aliquam, iste, laborum. Aspernatur atque delectus deserunt dolorem eius ipsum nemo, nihil odio placeat porro quam quisquam ratione recusandae tenetur, veritatis? Accusamus cumque ducimus, eaque excepturi, itaque labore magnam necessitatibus nulla placeat quaerat quam quas qui sint! Accusantium ea ipsa libero provident rem? Accusantium alias asperiores commodi delectus eaque eius error, ex, itaque maiores possimus praesentium quaerat quod temporibus vel voluptate. Accusantium alias consectetur eum fugiat in iste iure, magnam nobis nulla numquam obcaecati quaerat, qui quo quod temporibus totam voluptas voluptatem. Ea, exercitationem, temporibus. Commodi consectetur delectus dolorem esse et ex, illum iste reprehenderit repudiandae tempora ut voluptatum. Alias consectetur consequatur error est facilis in libero praesentium reiciendis tenetur voluptas! A asperiores atque, cum deleniti, doloremque dolores ducimus et itaque labore maxime molestiae neque, perspiciatis possimus quasi quis repellat similique suscipit veritatis. Accusantium aperiam asperiores autem blanditiis consequatur cumque deleniti dicta dolore ducimus eligendi expedita libero modi, mollitia nihil nisi perspiciatis porro possimus sapiente sit totam. Corporis cumque dignissimos, eaque enim impedit in laudantium, magni nam officiis quod recusandae saepe, tempora tempore totam velit voluptatem voluptates.',
            'content 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dol ...'
        ));
        $this->articles->add(new Article(
            'slug-4',
            'title 4 Lorem ipsum dolor sit amet, consectetur adipisicing.',
            'content 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dolores excepturi facilis nisi reiciendis sed tempora. Ab accusamus at dicta eaque esse eum id illum itaque, iure iusto laudantium magnam neque, omnis quae quas qui, sapiente similique tempora temporibus velit veritatis vero voluptate! Accusantium, culpa eius enim error, eum eveniet explicabo hic laborum maxime numquam optio possimus praesentium repellendus tempora, veniam. Consequatur deleniti iste nam odio, porro recusandae reiciendis! Aliquam aliquid at atque aut consectetur debitis deserunt doloribus, eligendi expedita explicabo facilis illum laboriosam maiores, minus modi molestiae mollitia optio provident quis quisquam quo quod temporibus voluptas! Assumenda harum ipsam necessitatibus quas quidem. Aliquid enim ex fugit libero necessitatibus nemo nihil quisquam sed sunt vero? Aliquam commodi cupiditate dolor reiciendis sint. Accusantium autem cumque cupiditate esse illo illum, modi molestias nemo non rerum soluta, tempora vel? A ab animi aperiam asperiores consequatur consequuntur cupiditate eligendi enim error esse exercitationem facilis fugit harum id ipsam iusto maxime molestias nobis nulla numquam qui quisquam reprehenderit, tenetur, veritatis voluptatum! Adipisci, animi aspernatur distinctio eveniet exercitationem fugiat fugit inventore iure magnam minus molestias mollitia officia perspiciatis, quam quo quos sit temporibus, totam ut voluptatum! Accusamus adipisci aliquid asperiores blanditiis culpa delectus ea hic in laborum, nam necessitatibus neque nesciunt nihil odit officia, quae, quod ratione rem reprehenderit suscipit tempore vel veritatis voluptatibus! Alias assumenda consectetur debitis, dicta dolore id iure nesciunt nobis nulla officiis optio praesentium sequi sint soluta temporibus unde vel. Accusantium adipisci animi at cum cumque dolor dolorem dolores, ducimus expedita explicabo facilis fuga id modi mollitia nam odio perferendis provident quam repellendus sapiente sed suscipit vitae, voluptates, voluptatibus voluptatum! Ab alias culpa id inventore nostrum numquam odio odit quam quo. At cum delectus deserunt doloribus esse eum explicabo fugiat ipsum maiores maxime, minus necessitatibus nihil nostrum obcaecati provident quaerat quasi quis reiciendis repellat reprehenderit suscipit tenetur unde voluptatum! Cumque, facere, perspiciatis. Error expedita perferendis quibusdam, quisquam quod rem sit vitae. Aliquam, iste, laborum. Aspernatur atque delectus deserunt dolorem eius ipsum nemo, nihil odio placeat porro quam quisquam ratione recusandae tenetur, veritatis? Accusamus cumque ducimus, eaque excepturi, itaque labore magnam necessitatibus nulla placeat quaerat quam quas qui sint! Accusantium ea ipsa libero provident rem? Accusantium alias asperiores commodi delectus eaque eius error, ex, itaque maiores possimus praesentium quaerat quod temporibus vel voluptate. Accusantium alias consectetur eum fugiat in iste iure, magnam nobis nulla numquam obcaecati quaerat, qui quo quod temporibus totam voluptas voluptatem. Ea, exercitationem, temporibus. Commodi consectetur delectus dolorem esse et ex, illum iste reprehenderit repudiandae tempora ut voluptatum. Alias consectetur consequatur error est facilis in libero praesentium reiciendis tenetur voluptas! A asperiores atque, cum deleniti, doloremque dolores ducimus et itaque labore maxime molestiae neque, perspiciatis possimus quasi quis repellat similique suscipit veritatis. Accusantium aperiam asperiores autem blanditiis consequatur cumque deleniti dicta dolore ducimus eligendi expedita libero modi, mollitia nihil nisi perspiciatis porro possimus sapiente sit totam. Corporis cumque dignissimos, eaque enim impedit in laudantium, magni nam officiis quod recusandae saepe, tempora tempore totam velit voluptatem voluptates.',
            'content 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dol ...'
        ));
        $this->articles->add(new Article(
            'slug-5',
            'title 5 Lorem ipsum dolor sit amet, consectetur adipisicing.',
            'content 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dolores excepturi facilis nisi reiciendis sed tempora. Ab accusamus at dicta eaque esse eum id illum itaque, iure iusto laudantium magnam neque, omnis quae quas qui, sapiente similique tempora temporibus velit veritatis vero voluptate! Accusantium, culpa eius enim error, eum eveniet explicabo hic laborum maxime numquam optio possimus praesentium repellendus tempora, veniam. Consequatur deleniti iste nam odio, porro recusandae reiciendis! Aliquam aliquid at atque aut consectetur debitis deserunt doloribus, eligendi expedita explicabo facilis illum laboriosam maiores, minus modi molestiae mollitia optio provident quis quisquam quo quod temporibus voluptas! Assumenda harum ipsam necessitatibus quas quidem. Aliquid enim ex fugit libero necessitatibus nemo nihil quisquam sed sunt vero? Aliquam commodi cupiditate dolor reiciendis sint. Accusantium autem cumque cupiditate esse illo illum, modi molestias nemo non rerum soluta, tempora vel? A ab animi aperiam asperiores consequatur consequuntur cupiditate eligendi enim error esse exercitationem facilis fugit harum id ipsam iusto maxime molestias nobis nulla numquam qui quisquam reprehenderit, tenetur, veritatis voluptatum! Adipisci, animi aspernatur distinctio eveniet exercitationem fugiat fugit inventore iure magnam minus molestias mollitia officia perspiciatis, quam quo quos sit temporibus, totam ut voluptatum! Accusamus adipisci aliquid asperiores blanditiis culpa delectus ea hic in laborum, nam necessitatibus neque nesciunt nihil odit officia, quae, quod ratione rem reprehenderit suscipit tempore vel veritatis voluptatibus! Alias assumenda consectetur debitis, dicta dolore id iure nesciunt nobis nulla officiis optio praesentium sequi sint soluta temporibus unde vel. Accusantium adipisci animi at cum cumque dolor dolorem dolores, ducimus expedita explicabo facilis fuga id modi mollitia nam odio perferendis provident quam repellendus sapiente sed suscipit vitae, voluptates, voluptatibus voluptatum! Ab alias culpa id inventore nostrum numquam odio odit quam quo. At cum delectus deserunt doloribus esse eum explicabo fugiat ipsum maiores maxime, minus necessitatibus nihil nostrum obcaecati provident quaerat quasi quis reiciendis repellat reprehenderit suscipit tenetur unde voluptatum! Cumque, facere, perspiciatis. Error expedita perferendis quibusdam, quisquam quod rem sit vitae. Aliquam, iste, laborum. Aspernatur atque delectus deserunt dolorem eius ipsum nemo, nihil odio placeat porro quam quisquam ratione recusandae tenetur, veritatis? Accusamus cumque ducimus, eaque excepturi, itaque labore magnam necessitatibus nulla placeat quaerat quam quas qui sint! Accusantium ea ipsa libero provident rem? Accusantium alias asperiores commodi delectus eaque eius error, ex, itaque maiores possimus praesentium quaerat quod temporibus vel voluptate. Accusantium alias consectetur eum fugiat in iste iure, magnam nobis nulla numquam obcaecati quaerat, qui quo quod temporibus totam voluptas voluptatem. Ea, exercitationem, temporibus. Commodi consectetur delectus dolorem esse et ex, illum iste reprehenderit repudiandae tempora ut voluptatum. Alias consectetur consequatur error est facilis in libero praesentium reiciendis tenetur voluptas! A asperiores atque, cum deleniti, doloremque dolores ducimus et itaque labore maxime molestiae neque, perspiciatis possimus quasi quis repellat similique suscipit veritatis. Accusantium aperiam asperiores autem blanditiis consequatur cumque deleniti dicta dolore ducimus eligendi expedita libero modi, mollitia nihil nisi perspiciatis porro possimus sapiente sit totam. Corporis cumque dignissimos, eaque enim impedit in laudantium, magni nam officiis quod recusandae saepe, tempora tempore totam velit voluptatem voluptates.',
            'content 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut cum doloremque dol ...'
        ));
    }

    /**
     * @return ArrayCollection|Article[]
     */
    public function getAll(): ArrayCollection
    {
        return $this->articles;
    }

    /**
     * @param string $slug
     *
     * @return Article|null
     */
    public function getBySlug(string $slug): ?Article
    {
        $article = $this->articles
            ->filter(function (Article $article) use ($slug) {
                return $article->getSlug() === $slug;
            })
            ->first();

        if (false === $article) {
            return null;
        }

        return $article;
    }
}