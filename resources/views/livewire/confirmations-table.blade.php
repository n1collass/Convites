<div>
    @if ($confirmations->count())
        <table class="min-w-full divide-y-2 mt-12 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Nome</th>
                    <th class="px-3 py-2 whitespace-nowrap">Presença</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($confirmations as $confirmation)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $confirmation->name }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            {{ $confirmation->confirm == 1 ? 'Sim' : 'Não' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center mt-12 text-sm opacity-75">Não foi possível encontrar nenhuma confirmação.</p>
    @endif

    <div class="mt-12 gap-4 text-center">
        {{ $confirmations->links(data: ['scrollTo' => '#confirmationsTable']) }}
    </div>

</div>
