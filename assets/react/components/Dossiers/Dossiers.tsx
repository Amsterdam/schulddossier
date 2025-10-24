import { useEffect, useMemo, useState } from "react";

import {
  CallToActionLink,
  Checkbox,
  Column,
  Field,
  FieldSet,
  Grid,
  Heading,
  Label,
  Pagination,
  Paragraph,
  Radio,
  Row,
  SearchField,
  Select,
  StandaloneLink,
  Table,
} from "@amsterdam/design-system-react";
import { TrashBinIcon } from "@amsterdam/design-system-react-icons";
import { debounce } from "lodash";

import { DossiersInterface } from "../../types/dossier.types";
import { PaginationInterface } from "~/types/pagination.types";

const SUBSET_SHV = ["bezig_shv", "compleet_shv", "gecontroleerd_shv", "verzonden_shv"];
const SUBSET_GKA = ["verzonden_shv", "compleet_gka", "dossier_gecontroleerd_gka"];
const SUBSET_ARCHIVED = ["afgesloten_gka"];

const ALL_STATUSES = [
  { label: "Bezig SHV", value: "bezig_shv" },
  { label: "Compleet SHV", value: "compleet_shv" },
  { label: "Gecontroleerd SHV", value: "gecontroleerd_shv" },
  { label: "Verzonden", value: "verzonden_shv" },
  { label: "Compleet GKA", value: "compleet_gka" },
  { label: "Gecontroleerd GKA", value: "dossier_gecontroleerd_gka" },
  { label: "Afgesloten", value: "afgesloten_gka" },
];

const DEBOUNCE_DELAY = 1000;

const PAGE_SIZES = [10, 25, 50];

export default function Dossiers({
  dossiers,
  pagination
}: Readonly<{
  dossiers: DossiersInterface[];
  pagination: PaginationInterface;
}>) {
  const searchParams = new URLSearchParams(document.location.search);

  const updateUrlSearchParams = () => {
    document.location.search = `?${searchParams.toString()}`;
  };


  /*
  ** Setting current page and size of pages.
  */

  const currentPage: number = Number(searchParams.get("page")) || 1;
  const currentPageSize: number = Number(searchParams.get("pageSize")) || 10;

  const pickPageSize = (size: PaginationInterface["pageSize"]) => {
    if (size === 10) {
      searchParams.delete("pageSize");
    } else {
      searchParams.set("pageSize", size.toString());
    }

    searchParams.set("page", "1");

    updateUrlSearchParams();
  };


  /*
  ** Setting search filter with debounce.
  */

  const [search, setSearch] = useState<string>(searchParams.get("search") || "");

  const searchHandler = (value: string) => {
    setSearch(value);

    if (value) {
      searchParams.set("search", value.toLowerCase());
    } else {
      searchParams.delete("search");
    }

    updateUrlSearchParams();
  };

  const debouncedSearchHandler = useMemo(() => debounce(searchHandler, DEBOUNCE_DELAY), []);

  useEffect(() => () => debouncedSearchHandler.cancel(), []);


  /*
  ** Setting section and status filter.
  */

  const [phase, setPhase] = useState<string>("all");

  const statusFilter: string[] = searchParams.get("statusFilter")?.split(",") || [];

  const selectPhase = (phase: string) => {
    setPhase(phase);

    switch (phase) {
      case "archive":
        searchParams.set("statusFilter", SUBSET_ARCHIVED.join(","));
        break;
      case "gka":
        searchParams.set("statusFilter", SUBSET_GKA.join(","));
        break;
      case "shv":
        searchParams.set("statusFilter", SUBSET_SHV.join(","));
        break;
      default:
        searchParams.delete("statusFilter");
    }

    updateUrlSearchParams();
  };

  const toggleStatus = (status: string) => {
    setPhase("all");

    const newStatus = statusFilter.includes(status)
      ? statusFilter.filter((s: string) => s !== status)
      : [...statusFilter, status];

    if (newStatus.length > 0) {
      searchParams.set("statusFilter", newStatus.join(","));
    } else {
      searchParams.delete("statusFilter");
    }

    updateUrlSearchParams();
  };

  return (
    <>
      <Grid.Cell span="all">
        <Row align="between" wrap={true}>
          <Heading level={1}>Dossiers</Heading>

          <Row>
            <StandaloneLink icon={TrashBinIcon}>Prullenbak</StandaloneLink>
            <CallToActionLink href="/dossier/nieuw">Nieuw dossier</CallToActionLink>
          </Row>
        </Row>
      </Grid.Cell>

      <Grid.Cell span={{ narrow: 4, medium: 8, wide: 9 }}>
        <Column>
          <Row alignVertical="center">
            <SearchField onSubmit={(event) => {
              event.preventDefault();
              searchHandler(event.currentTarget.search.value);
            }}>
              <Label htmlFor="dossiers-zoeken">Dossiers zoeken</Label>
              <SearchField.Input
                id="dossiers-zoeken"
                name="search"
                placeholder="Zoek op naam of dossier nr."
                defaultValue={search}
              />
              <SearchField.Button />
            </SearchField>
            {/* <Field>
              <Label htmlFor="dossiers-zoeken">Dossiers zoeken</Label>
              <TextInput
                id="dossiers-zoeken"
                placeholder="Zoek op naam of dossier nr."
                value={search}
                onChange={searchHandler}
              />
            </Field> */}
          </Row>

          {
            (dossiers?.length > 0)
              ? (
                <Table>
                  <Table.Header>
                    <Table.Row>
                      <Table.HeaderCell>Naam</Table.HeaderCell>
                      <Table.HeaderCell>Organisatie</Table.HeaderCell>
                      <Table.HeaderCell>SHV-er / Bewindvoerder dossier nr.</Table.HeaderCell>
                      <Table.HeaderCell>GKA dossier nr.</Table.HeaderCell>
                      <Table.HeaderCell>Aangemaakt</Table.HeaderCell>
                      <Table.HeaderCell>Status</Table.HeaderCell>
                    </Table.Row>
                  </Table.Header>

                  <Table.Body>
                    {dossiers.map((dossier: DossiersInterface) => {
                      return (
                        <Table.Row key={dossier.id}>
                          <Table.Cell>{`${dossier.clientVoorletters}. ${dossier.clientNaam}`}</Table.Cell>
                          <Table.Cell>{dossier.organisatie}</Table.Cell>
                          <Table.Cell>{dossier.regasNummer}</Table.Cell>
                          <Table.Cell>{dossier.allegroNummer}</Table.Cell>
                          <Table.Cell>{dossier.aanmaakDatumTijd}</Table.Cell>
                          <Table.Cell>
                            {
                              ALL_STATUSES
                                .find(
                                  (status: { label: string, value: string }) =>
                                    status.value === dossier.status,
                                )
                                ?.label
                            }
                          </Table.Cell>
                        </Table.Row>
                      );
                    })}
                  </Table.Body>
                </Table>
              )
              : <Paragraph>Geen dossiers gevonden</Paragraph>
          }

          {pagination.numberOfPages > 1 && (
            <Pagination
              linkTemplate={(pageNumber: number) => "?page=" + pageNumber}
              page={currentPage}
              totalPages={pagination.numberOfPages}
            />
          )}
        </Column>
      </Grid.Cell>

      <Grid.Cell span={{
        narrow: 4, medium: 8, wide: 3,
      }}
      >
        <Column>
          <Field>
            <Label htmlFor="dossiers-medewerker">Medewerker</Label>
            <Select
              id="dossiers-medewerker"
            >
              <Select.Option value="Alle medewerkers">Alle medewerkers</Select.Option>
              <Select.Option value="Optie 1">Optie 1</Select.Option>
              <Select.Option value="Optie 2">Optie 2</Select.Option>
              <Select.Option value="Optie 3">Optie 3</Select.Option>
            </Select>
          </Field>

          <Field>
            <Label htmlFor="dossiers-team">Team</Label>
            <Select
              id="dossiers-team"
            >
              <Select.Option value="GKA Team 1">GKA Team 1</Select.Option>
              <Select.Option value="GKA Team 2">GKA Team 2</Select.Option>
              <Select.Option value="GKA Team 3">GKA Team 3</Select.Option>
              <Select.Option value="GKA Team 4">GKA Team 4</Select.Option>
            </Select>
          </Field>

          <Field>
            <Label htmlFor="dossiers-fase">Fase selecteren</Label>
            <Paragraph id="dossiers-fase-description">
              Selecteer een groep statussen
            </Paragraph>
            <Select
              aria-describedby="dossiers-fase-description"
              id="dossiers-fase"
              value={phase}
              onChange={e => selectPhase(e.target.value)}
            >
              <Select.Option value="all">Alle dossiers</Select.Option>
              <Select.Option value="shv">Dossiers bij SHV-er/Bewindvoerder</Select.Option>
              <Select.Option value="gka">Dossiers bij GKA</Select.Option>
              <Select.Option value="archive">Afgeronde dossiers</Select.Option>
            </Select>
          </Field>

          <FieldSet
            id="fieldset-f"
            aria-labelledby="fieldset-f"
            legend="Status"
          >
            <Column gap="x-small">
              {ALL_STATUSES.map((status: { label: string, value: string }) => (
                <Checkbox
                  key={status.label}
                  name="about"
                  aria-required="true"
                  checked={statusFilter.includes(status.value)}
                  value={status.value}
                  onChange={() => toggleStatus(status.value)}
                >
                  {status.label}
                </Checkbox>
              ))}
            </Column>
          </FieldSet>

          <FieldSet
            aria-required="true"
            legend="Resultaten per pagina"
            role="radiogroup"
          >
            <Column gap="x-small">
              {PAGE_SIZES.map((pageSize: PaginationInterface["pageSize"]) => {
                return (
                  <Radio
                    key={pageSize}
                    name="about"
                    aria-required="true"
                    checked={currentPageSize === pageSize}
                    value={pageSize}
                    onChange={() => pickPageSize(pageSize)}
                  >
                    {pageSize}
                  </Radio>
                );
              })}
            </Column>
          </FieldSet>
        </Column>
      </Grid.Cell>
    </>
  );
}
