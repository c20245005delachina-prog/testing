import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';

interface Publisher {
    id: number;
    publisher_name: string;
}

interface Profile {
    id: number;
    author_id: number;
    bio: string | null;
}

interface Book {
    id: number;
    author_id: number;
    publisher_id: number | null;
    title: string;
    slug: string | null;
}

interface Author {
    id: number;
    name: string;
    publisher_id: number;
    publisher: Publisher | null;
    profile: Profile | null;
    books: Book[];
}

interface Props {
    authors: Author[];
}

export default function Index({ authors }: Props) {
    return (
        <AppLayout>
            <Head title="Authors" />

            <div className="min-h-screen bg-amber-50 p-6">
                <div className="mx-auto max-w-7xl">
                    <div className="mb-6">
                        <h1 className="text-3xl font-bold text-amber-900">
                            Authors
                        </h1>
                        <p className="mt-2 text-amber-700">
                            Manage and review the authors in the catalog.
                        </p>
                    </div>

                    <div className="overflow-hidden rounded-xl border border-amber-200 bg-white shadow-sm">
                        <div className="overflow-x-auto">
                            <table className="w-full text-left">
                                <thead className="bg-amber-100 text-amber-900">
                                    <tr>
                                        <th className="px-4 py-3">ID</th>
                                        <th className="px-4 py-3">Name</th>
                                        <th className="px-4 py-3">Publisher</th>
                                        <th className="px-4 py-3">Books</th>
                                        <th className="px-4 py-3">Bio</th>
                                    </tr>
                                </thead>

                                <tbody className="divide-y divide-amber-100">
                                    {authors.length > 0 ? (
                                        authors.map((author) => (
                                            <tr
                                                key={author.id}
                                                className="hover:bg-amber-50"
                                            >
                                                <td className="px-4 py-3">
                                                    {author.id}
                                                </td>

                                                <td className="px-4 py-3 font-medium text-amber-900">
                                                    {author.name}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {author.publisher?.publisher_name ??
                                                        'Unknown publisher'}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {author.books.length}
                                                </td>

                                                <td className="px-4 py-3">
                                                    {author.profile?.bio ??
                                                        'No bio available'}
                                                </td>
                                            </tr>
                                        ))
                                    ) : (
                                        <tr>
                                            <td
                                                colSpan={5}
                                                className="px-4 py-8 text-center text-gray-500"
                                            >
                                                No authors found in the database.
                                            </td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <p className="mt-4 text-sm text-amber-700">
                        Total authors: {authors.length}
                    </p>
                </div>
            </div>
        </AppLayout>
    );
}
