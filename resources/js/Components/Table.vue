<vs-table>
  <template #thead>
    <vs-tr>
      <vs-th>
        Name
      </vs-th>
      <vs-th>
        Email
      </vs-th>
      <vs-th>
        Id
      </vs-th>
    </vs-tr>
  </template>
  <template #tbody>
    <vs-tr
      :key="i"
      v-for="(tr, i) in users"
      :data="tr"
    >
      <vs-td>
        {{ tr.name }}
      </vs-td>
      <vs-td>
       {{ tr.email }}
      </vs-td>
      <vs-td>
       {{ tr.id }}
      </vs-td>
    </vs-tr>
  </template>
</vs-table>
