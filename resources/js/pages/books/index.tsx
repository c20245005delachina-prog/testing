import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';

interface Author {
    id: number;
    name: string;
}

interface Publisher {
    id: number;
    publisher_name: string;
}

interface Genre {
    id: number;
    genre_name: string;
}

interface Book {
    id: number;
    title: string;
    slug: string | null;
    isbn: string | null;
    price: number | string | null;
    description: string | null;
    image: string | null;
    author: Author | null;
    publisher: Publisher | null;
    genres: Genre[];
}

interface Props {
    books: Book[];
}

export default function Index({ books }: Props) {
    return (
        <AppLayout>
            <Head title="Books" />

            <div className="min-h-screen bg-purple-50 p-6">
                <div className="mx-auto max-w-7xl">
                    <div className="mb-6">
                        <h1 className="text-3xl font-bold text-purple-900">
                            Books
                        </h1>
                        <p className="mt-2 text-purple-600">
                            Browse the books in your database.
                        </p>
                    </div>

                    <div className="overflow-hidden rounded-xl border border-purple-200 bg-white shadow-sm">
                        <div className="overflow-x-auto">
                            <table className="w-full text-left">
                                <thead className="bg-purple-100 text-purple-900">
                                    <tr>
                                        <th className="px-4 py-3">ID</th>
                                        <th className="px-4 py-3">Title</th>
                                        <th className="px-4 py-3">Author</th>
                                        <th className="px-4 py-3">Publisher</th>
                                        <th className="px-4 py-3">ISBN</th>
                                        <th className="px-4 py-3">Price</th>
                                        <th className="px-4 py-3">Genres</th>
                                    </tr>
                                </thead>

                                <tbody className="divide-y divide-purple-100">
                                    {books.length > 0 ? (
                                        books.map((book) => (
                                            <tr
                                                key={book.id}
                                                className="hover:bg-purple-50"
                                            >
                                                <td className="px-4 py-3">
                                                    {book.id}
                                                </td>

                                                <td className="px-4 py-3 font-medium text-purple-900">
                                                    {book.title}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {book.author?.name ??
                                                        'Unknown author'}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {book.publisher
                                                        ?.publisher_name ??
                                                        'Unknown publisher'}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {book.isbn ?? '—'}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {book.price !== null
                                                        ? `₱${Number(book.price).toFixed(2)}`
                                                        : '—'}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {book.genres?.length
                                                        ? book.genres
                                                              .map(
                                                                  (genre) =>
                                                                      genre.genre_name,
                                                              )
                                                              .join(', ')
                                                        : 'No genre'}
                                                </td>
                                            </tr>
                                        ))
                                    ) : (
                                        <tr>
                                            <td
                                                colSpan={7}
                                                className="px-4 py-8 text-center text-gray-500"
                                            >
                                                No books found in the database.
                                            </td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <p className="mt-4 text-sm text-purple-700">
                        Total books: {books.length}
                    </p>
                </div>
            </div>
        </AppLayout>
    );
}
